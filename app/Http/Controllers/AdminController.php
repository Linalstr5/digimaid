<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Histories;
use App\Models\Payments;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function user(){
        $User = User::orderBy('id')->get();
        return view('admin.akun.index', compact('User'));
    }

    public function hapus_akun($id){
        User::find($id)->delete();
        return redirect('/admin/akun');
    }

    public function tambah_user(Request $req){
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

        return redirect('/admin/akun');
    }

    public function histories(){
        $Histories = Histories::orderby('id')->get();
        return view('admin.histories', compact('Histories'));
    }

    public function maids(){
        $User = User::where('role', '2')->get();
        return view('admin.maids', compact('User'));
    }

    public function customers(){
        $User = User::where('role', '3')->get();
        return view('admin.customers', compact('User'));
    }

    public function maids_hapus($id){
        User::find($id)->delete();
        return redirect('/admin/maids');
    }

    public function customers_hapus($id){
        User::find($id)->delete();
        return redirect('/admin/customers');
    }

    public function payment(){
        $Payment = Payments::orderBy('tgl_mulai', 'desc')->get();
        return view('admin.payment', compact('Payment'));
    }

    public function change_psw(){
        return view('admin.change_psw');
    }

    public function change_psw_process(Request $request){
        $User = Auth::user();
        $UserPassword = $User->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        if(!Hash::check($request->current_password, $UserPassword)){
            return back()->withErrors(['current_password'], 'Password lama salah');
        }

        if(strcmp($request->get('current_password'), $request->get('password')) == 0 ){
            return back()->withErrors(['password'], 'Password baru tidak boleh sama dengan password lama');
        }

        $User->password = Hash::make($request->password);
        $save = $User->save();

        if($save){
            return redirect('/admin');
        }
            return back()->withErrors('Gagal update password, silakan ulangi');
    }
}
