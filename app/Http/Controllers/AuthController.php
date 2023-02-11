<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string',
            'role' => 'required',
        ];

        $messages = [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.string' => 'Password harus berupa string',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back->withErrors($validator)->withInput($request->all);
        }
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
        ];
        
        Auth::attempt($data);
        // $user = User::find('role');
        
        if (Auth::check() && $data['role'] == 1){
            return redirect('/admin');
        } elseif(Auth::check() && $data['role'] == 2){
            return redirect('/maids');
        } elseif(Auth::check() && $data['role'] == 3){
            return redirect('/customers');
        } else {
            Session::flash('Gagal melakukan proses login', 'Email atau Password salah');
            return redirect('/landing')->With('error');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/landing');
    }

    public function show_register(){
        return view('register');
    }

    public function register(Request $req){
        $rules = [
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
            'role' => 'required',
        ];

        $validator = Validator::make($req->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->no_tlp = $req->no_tlp;
        $user->alamat = $req->alamat;
        $user->role = $req->role;
        $user->password = Hash::make($req->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $save = $user->save();

        if($save){
            return redirect('/')->with('success');
        } else {
            return redirect('/auth/show_register')->with('error');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
