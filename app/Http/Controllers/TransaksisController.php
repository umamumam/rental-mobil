<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Transaksi;
use App\Http\Requests\TransaksiRequest;

class TransaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $transaksis= Transaksi::all();
        return view('transaksis.index', ['transaksis'=>$transaksis]);
    }
    public function list()
    {
        $transaksis = Transaksi::all(); // Ambil semua list mobil
        return view('list', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $status_pembayaran_belum_terbayar = true; // Misalnya, di sini diasumsikan bahwa status pembayaran belum terbayar untuk penyewa
        
        return view('transaksis.create', compact('status_pembayaran_belum_terbayar'));
        //return view('transaksis.create');
    }
    public function input()
    {
        $status_pembayaran_belum_terbayar = true; // Misalnya, di sini diasumsikan bahwa status pembayaran belum terbayar untuk penyewa
        
        return view('input', compact('status_pembayaran_belum_terbayar'));
        //return view('transaksis.create');
    }
    public function searchMobil(Request $request)
{
    $query = $request->input('query');
    $mobils = Mobil::where('merek', 'like', "%$query%")
                    ->orWhere('model', 'like', "%$query%")
                    ->get();

    return view('view.data', ['mobils' => $mobils]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  TransaksiRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TransaksiRequest $request)
    {
        $transaksi = new Transaksi;
		$transaksi->nama = $request->input('nama');
		$transaksi->mobil = $request->input('mobil');
		$transaksi->plat = $request->input('plat');
		$transaksi->tanggal_mulai = $request->input('tanggal_mulai');
		$transaksi->tanggal_selesai = $request->input('tanggal_selesai');
		$transaksi->waktu = $request->input('waktu');
		$transaksi->tarif = $request->input('tarif');
		$transaksi->status_mobil = $request->input('status_mobil');
		$transaksi->status_pembayaran = $request->input('status_pembayaran');
        $transaksi->save();

        return view('pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksis.show',['transaksi'=>$transaksi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksis.edit',['transaksi'=>$transaksi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TransaksiRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TransaksiRequest $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
		$transaksi->nama = $request->input('nama');
		$transaksi->mobil = $request->input('mobil');
		$transaksi->plat = $request->input('plat');
		$transaksi->tanggal_mulai = $request->input('tanggal_mulai');
		$transaksi->tanggal_selesai = $request->input('tanggal_selesai');
		$transaksi->waktu = $request->input('waktu');
		$transaksi->tarif = $request->input('tarif');
		$transaksi->status_mobil = $request->input('status_mobil');
		$transaksi->status_pembayaran = $request->input('status_pembayaran');
        $transaksi->save();

        return to_route('transaksis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return to_route('transaksis.index');
    }
}
