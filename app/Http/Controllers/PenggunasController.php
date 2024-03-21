<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Pengguna;
use App\Http\Requests\PenggunaRequest;

class PenggunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $penggunas= Pengguna::all();
        return view('penggunas.index', ['penggunas'=>$penggunas]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('penggunas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PenggunaRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PenggunaRequest $request)
    {

            // Validasi input
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        // Tambahkan validasi lain sesuai kebutuhan Anda
    ]);

    // Cek apakah data dengan nama dan email yang sama sudah ada
    $existingUser = Pengguna::where('nama', $request->nama)
                             ->where('email', $request->email)
                             ->first();

    if ($existingUser) {
        return redirect()->back()->withInput()->withErrors(['message' => 'Maaf, data sudah terdaftar. Silahkan lanjut tahap selanjutnya.']);
    }

    // Jika data tidak ada, simpan data baru
    $pengguna = new Pengguna();
    $pengguna->nama = $request->nama;
    $pengguna->email = $request->email;
    $pengguna->alamat = $request->input('alamat');
    $pengguna->telepon = $request->input('telepon');
    $pengguna->nomor_sim = $request->input('nomor_sim');
    $pengguna->jenis_pengguna = $request->input('jenis_pengguna');
    $pengguna->save();

        return to_route('transaksis.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('penggunas.show',['pengguna'=>$pengguna]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('penggunas.edit',['pengguna'=>$pengguna]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PenggunaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PenggunaRequest $request, $id)
    {
        $pengguna = Pengguna::findOrFail($id);
		$pengguna->nama = $request->input('nama');
		$pengguna->email = $request->input('email');
		$pengguna->alamat = $request->input('alamat');
		$pengguna->telepon = $request->input('telepon');
		$pengguna->nomor_sim = $request->input('nomor_sim');
		$pengguna->jenis_pengguna = $request->input('jenis_pengguna');
        $pengguna->save();

        return to_route('penggunas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();

        return to_route('penggunas.index');
    }
}
