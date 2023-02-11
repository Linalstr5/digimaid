<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Offerings;
use App\Models\Histories;
use App\Models\Payments;
use Carbon\Carbon;
use Hash;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('customers.index');
    }
    
     public function maids()
    {
        $User = User::where('role', '2')->orderBy('id')->get();
        return view('customers.maids', compact('User'));
    }

    public function offering($id){
        $User = User::find($id);
        return view('customers.offering', ['User' => $User]);
    }

    // Untuk mengirim tawaran
    public function send_offering(Request $request){
        // $formFields = $request->validate([
        //     'nama_maid' => 'required',
        //     'maid_id' => 'required',
        //     'nama_customer' => 'required',
        //     'customer_id' => 'required',
        //     'email_maid' => 'required',
        //     'email_customer' => 'required',
        //     'no_tlp_maid' => 'required',
        //     'no_tlp_customer' => 'required',
        //     'alamat_maid' => 'required',
        //     'alamat_customer' => 'required',
        //     'tgl_mulai' => 'required',
        //     'tgl_selesai' => 'required',
        //     'penitipan' => 'required'
        // ]);

        $request->validate([
            'nama_maid' => 'required',
            'maid_id' => 'required',
            'nama_customer' => 'required',
            'customer_id' => 'required',
            'email_maid' => 'required',
            'email_customer' => 'required',
            'no_tlp_maid' => 'required',
            'no_tlp_customer' => 'required',
            'alamat_maid' => 'required',
            'alamat_customer' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'penitipan' => 'required',
            'upah' => 'required',
        ]);

        // $save = Offerings::create($formFields);

        $offer = new Offerings;
        $offer->nama_maid = $request->nama_maid;
        $offer->customer_id = $request->customer_id;
        $offer->maid_id = $request->maid_id;
        $offer->nama_customer = $request->nama_customer;
        $offer->email_maid = $request->email_maid;
        $offer->email_customer = $request->email_customer;
        $offer->no_tlp_maid = $request->no_tlp_maid;
        $offer->no_tlp_customer = $request->no_tlp_customer;
        $offer->no_tlp_customer = $request->no_tlp_customer;
        $offer->alamat_maid = $request->alamat_maid;
        $offer->alamat_customer = $request->alamat_customer;
        $offer->tgl_mulai = $request->tgl_mulai;
        $offer->tgl_selesai = $request->tgl_selesai;
        $offer->penitipan = $request->penitipan;
        $offer->upah = $request->upah;

        $history = new Histories;
        $history->nama_maid = $request->nama_maid;
        $history->customer_id = $request->customer_id;
        $history->maid_id = $request->maid_id;
        $history->nama_customer = $request->nama_customer;
        $history->email_maid = $request->email_maid;
        $history->email_customer = $request->email_customer;
        $history->no_tlp_maid = $request->no_tlp_maid;
        $history->no_tlp_customer = $request->no_tlp_customer;
        $history->no_tlp_customer = $request->no_tlp_customer;
        $history->alamat_maid = $request->alamat_maid;
        $history->alamat_customer = $request->alamat_customer;
        $history->tgl_mulai = $request->tgl_mulai;
        $history->tgl_selesai = $request->tgl_selesai;
        $history->penitipan = $request->penitipan;
        $history->upah = $request->upah;
        $history->save();

        $save = $offer->save();

        if($save){
            return redirect('/customers');
        } else{
            return redirect('/customers')->backWith('error');
        }
    }

    // Untuk melihat tawaran terkirim
    public function offer_sent(){
        $Offer = Offerings::where('customer_id', Auth::user()->id)->get();
        return view('customers.offer_sent', compact('Offer'));
    }

    public function offer_active(){
        $date_now = Carbon::now();
        $Offer = Offerings::where([
            ['status', 'Diterima'],
            // ['tgl_selesai' > $date_now]
        ])->get();

        return view('customers.offer_active', compact('Offer'));
    }

    public function histories(){
        $Histories = Histories::where('customer_id', Auth::user()->id)->get();
        return view('customers.histories', compact('Histories'));
    }

    public function review($id){
        $Histories = Histories::find($id);
        return view('customers.review', ['Histories' => $Histories]);
    }

    public function review_send(Request $request, $id){
        $request->validate([
            'nama_maid' => 'required',
            'maid_id' => 'required',
            'nama_customer' => 'required',
            'customer_id' => 'required',
            'email_maid' => 'required',
            'email_customer' => 'required',
            'no_tlp_maid' => 'required',
            'no_tlp_customer' => 'required',
            'alamat_maid' => 'required',
            'alamat_customer' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'penitipan' => 'required',
            'upah' => 'required',
            'status' => 'required',
            'review' => 'required',
        ]);

        Histories::find($id)->update([
            'nama_maid' => $request->nama_maid,
            'nama_customer' => $request->nama_customer,
            'email_maid' => $request->email_maid,
            'email_customer' => $request->email_customer,
            'maid_id' => $request->maid_id,
            'customer_id' => $request->customer_id,
            'alamat_maid' => $request->alamat_maid,
            'alamat_customer' => $request->alamat_customer,
            'no_tlp_maid' => $request->no_tlp_maid,
            'no_tlp_customer' => $request->no_tlp_customer,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'penitipan' => $request->penitipan,
            'status' => $request->status,
            'upah' => $request->upah,
            'review' => $request->review,
        ]);

        return redirect('/customers/histories');
    }

    public function payment_check(){
        $Payment = Payments::where('customer_id', Auth::user()->id)->get();
        return view('customers.payment_check', compact('Payment'));
    }

    public function payment_get(Request $request, $id){
        $Payment = Payments::find($id);
        return view('customers.payment_get', ['Payment' => $Payment]);
    }

    public function change_psw(){
        return view('customers.change_psw');
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
            return redirect('/customers');
        }
            return back()->withErrors('Gagal update password, silakan ulangi');
    }
}
