<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offerings;
use App\Models\Histories;
use App\Models\Payments;
use Hash;
use Illuminate\Support\Str;

class MaidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
        return view('maids.index');
    }

     public function offer_received()
    {
        $Offer = Offerings::where([
            ['maid_id', Auth::user()->id],
            ['status', 'Terkirim - Menunggu Respon'],
            ])->orderBy('id')->get();
        return view('maids.offer_received', compact('Offer'));
    }

    public function detail_offer($id){
        $Offer = Offerings::find($id);
        return view('maids.offer_detail', ['Offer' => $Offer]);
    }

    public function respond_offer(Request $request, $id){
        $request->validate([
            'nama_maid' => 'required',
            'nama_customer' => 'required',
            'maid_id' => 'required',
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
        ]);

        Offerings::find($id)->update([
            'nama_maid' => $request->nama_maid,
            'nama_customer' => $request->nama_customer,
            'maid_id' => $request->maid_id,
            'customer_id' => $request->customer_id,
            'email_maid' => $request->email_maid,
            'email_customer' => $request->email_customer,
            'alamat_maid' => $request->alamat_maid,
            'alamat_customer' => $request->alamat_customer,
            'no_tlp_maid' => $request->no_tlp_maid,
            'no_tlp_customer' => $request->no_tlp_customer,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'penitipan' => $request->penitipan,
            'upah' => $request->upah,
            'status' => $request->status,
        ]);

        $history = new Histories;
        $history->nama_maid = $request->nama_maid;
        $history->nama_customer = $request->nama_customer;
        $history->maid_id = $request->maid_id;
        $history->customer_id = $request->customer_id;
        $history->email_maid = $request->email_maid;
        $history->email_customer = $request->email_customer;
        $history->alamat_maid = $request->alamat_maid;
        $history->alamat_customer = $request->alamat_customer;
        $history->no_tlp_maid = $request->no_tlp_maid;
        $history->no_tlp_customer = $request->no_tlp_customer;
        $history->tgl_mulai = $request->tgl_mulai;
        $history->tgl_selesai = $request->tgl_selesai;
        $history->penitipan = $request->penitipan;
        $history->upah = $request->upah;
        $history->status = $request->status;
        $history->save();

        return redirect('/maids/history');
    }

    public function histories(){
        $Histories = Histories::where('maid_id', Auth::user()->id)->get();
        return view('maids.histories', compact('Histories'));
    }

    public function accept_offer(Request $request, $id){
        Offerings::find($id)->update([
            'status' => 'Diterima',
        ]);

        // $history = new Histories;
        // $history->nama_maid = $request->nama_maid;
        // $history->customer_id = $request->customer_id;
        // $history->maid_id = $request->maid_id;
        // $history->nama_customer = $request->nama_customer;
        // $history->email_maid = $request->email_maid;
        // $history->email_customer = $request->email_customer;
        // $history->no_tlp_maid = $request->no_tlp_maid;
        // $history->no_tlp_customer = $request->no_tlp_customer;
        // $history->no_tlp_customer = $request->no_tlp_customer;
        // $history->alamat_maid = $request->alamat_maid;
        // $history->alamat_customer = $request->alamat_customer;
        // $history->tgl_mulai = $request->tgl_mulai;
        // $history->tgl_selesai = $request->tgl_selesai;
        // $history->penitipan = $request->penitipan;
        // $history->upah = $request->upah;
        // $history->status = $request->status;
        // $history->save();

        return redirect('maids');
    }

    public function decline_offer(Request $request, $id){
        Offerings::find($id)->update([
            'status' => 'Ditolak',
        ]);

        // $history = new Histories;
        // $history->nama_maid = $request->nama_maid;
        // $history->customer_id = $request->customer_id;
        // $history->maid_id = $request->maid_id;
        // $history->nama_customer = $request->nama_customer;
        // $history->email_maid = $request->email_maid;
        // $history->email_customer = $request->email_customer;
        // $history->no_tlp_maid = $request->no_tlp_maid;
        // $history->no_tlp_customer = $request->no_tlp_customer;
        // $history->no_tlp_customer = $request->no_tlp_customer;
        // $history->alamat_maid = $request->alamat_maid;
        // $history->alamat_customer = $request->alamat_customer;
        // $history->tgl_mulai = $request->tgl_mulai;
        // $history->tgl_selesai = $request->tgl_selesai;
        // $history->penitipan = $request->penitipan;
        // $history->upah = $request->upah;
        // $history->status = $request->status;
        // $history->save();

        return redirect('maids');
    }

    // Untuk membuat tagihan
    public function generate_invoice($id){
        $Histories = Histories::find($id);
        return view('maids.generate_invoice', ['Histories' => $Histories]);
    }

    // Tagihan yang sudah digenerate akan dikirim kepada customer
    public function send_invoice(Request $request){
        $request->validate([
            'nama_maid' => 'required',
            'nama_customer' => 'required',
            'maid_id' => 'required',
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
            // 'dm_va' => 'required',
        ]);

        $Payment = new Payments;
        $Payment->nama_maid = $request->nama_maid;
        $Payment->nama_customer = $request->nama_customer;
        $Payment->email_maid = $request->email_maid;
        $Payment->email_customer = $request->email_customer;
        $Payment->maid_id = $request->maid_id;
        $Payment->customer_id = $request->customer_id;
        $Payment->alamat_maid = $request->alamat_maid;
        $Payment->alamat_customer = $request->alamat_customer;
        $Payment->no_tlp_maid = $request->no_tlp_maid;
        $Payment->no_tlp_customer = $request->no_tlp_customer;
        $Payment->tgl_mulai = $request->tgl_mulai;
        $Payment->tgl_selesai = $request->tgl_selesai;
        $Payment->penitipan = $request->penitipan;
        $Payment->upah = $request->upah;
        $Payment->status = $request->status;
        $Payment->review = $request->review;
        $Payment->dm_va = 'DM-VA-' . random_int(1000000, 9999999);
        $Payment->save();

        return redirect('/maids/invoice_sent');
    }

    // Untuk mengambil tagihan yang pernah dikirim
    public function invoice_sent(){
        $Payment = Payments::where('maid_id', Auth::user()->id)->get();
        return view('maids.invoice_sent', compact('Payment'));
    }

    public function change_psw(){
        return view('maids.change_psw');
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
            return redirect('/maids');
        }
            return back()->withErrors('Gagal update password, silakan ulangi');
    }
}
