<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

        return view('user.history.index', [
            "title" => 'Pesanan'
        ], compact('pesanans'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('user.history.detail', [
            "title" => 'Pesanan | Detail Pemesanan'
        ], compact('pesanan', 'pesanan_details'));
    }

    public function history() {
        $historyPesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', '=',3)->get();
        return view('user.history.history', [
            "title" => 'History Pemesanan'
        ], compact('historyPesanan'));
    }

    public function historyDetail($id) {
        $historyPesanan = Pesanan::where('id', $id)->first();
        $historyDetailPesanan = PesananDetail::where('pesanan_id', $historyPesanan->id)->get(); 
        return view('user.history.detail-history', [
            "title" => 'Detail History Pemesanan'
        ], compact('historyPesanan', 'historyDetailPesanan'));
    }
}
