<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Pengembalian;
use App\Http\Requests\PengembalianRequest;

class PengembaliansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pengembalians= Pengembalian::all();
        return view('pengembalians.index', ['pengembalians'=>$pengembalians]);
    }
    public function kembali()
    {
        $pengembalians = Pengembalian::all(); // Ambil semua kembali mobil
        return view('kembali', compact('pengembalians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pengembalians.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PengembalianRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PengembalianRequest $request)
    {
        $pengembalian = new Pengembalian;
		$pengembalian->nama = $request->input('nama');
		$pengembalian->mobil = $request->input('mobil');
		$pengembalian->plat = $request->input('plat');
		$pengembalian->jam = $request->input('jam');
		$pengembalian->keterangan = $request->input('keterangan');
        $pengembalian->save();

        return to_route('pengembalians.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalians.show',['pengembalian'=>$pengembalian]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalians.edit',['pengembalian'=>$pengembalian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PengembalianRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PengembalianRequest $request, $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
		$pengembalian->nama = $request->input('nama');
		$pengembalian->mobil = $request->input('mobil');
		$pengembalian->plat = $request->input('plat');
		$pengembalian->jam = $request->input('jam');
		$pengembalian->keterangan = $request->input('keterangan');
        $pengembalian->save();

        return to_route('pengembalians.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();

        return to_route('pengembalians.index');
    }
}
