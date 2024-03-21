<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Sewa;
use App\Http\Requests\SewaRequest;

class SewasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sewas= Sewa::all();
        return view('sewas.index', ['sewas'=>$sewas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('sewas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SewaRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SewaRequest $request)
    {
        $sewa = new Sewa;
		$sewa->nama = $request->input('nama');
		$sewa->mobil = $request->input('mobil');
		$sewa->plat = $request->input('plat');
		$sewa->tanggal_mulai = $request->input('tanggal_mulai');
		$sewa->tanggal_selesai = $request->input('tanggal_selesai');
		$sewa->waktu = $request->input('waktu');
		$sewa->tarif = $request->input('tarif');
		$sewa->status_mobil = $request->input('status_mobil');
		$sewa->status_pembayaran = $request->input('status_pembayaran');
        $sewa->save();

        return to_route('sewas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $sewa = Sewa::findOrFail($id);
        return view('sewas.show',['sewa'=>$sewa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $sewa = Sewa::findOrFail($id);
        return view('sewas.edit',['sewa'=>$sewa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SewaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SewaRequest $request, $id)
    {
        $sewa = Sewa::findOrFail($id);
		$sewa->nama = $request->input('nama');
		$sewa->mobil = $request->input('mobil');
		$sewa->plat = $request->input('plat');
		$sewa->tanggal_mulai = $request->input('tanggal_mulai');
		$sewa->tanggal_selesai = $request->input('tanggal_selesai');
		$sewa->waktu = $request->input('waktu');
		$sewa->tarif = $request->input('tarif');
		$sewa->status_mobil = $request->input('status_mobil');
		$sewa->status_pembayaran = $request->input('status_pembayaran');
        $sewa->save();

        return to_route('sewas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();

        return to_route('sewas.index');
    }
}
