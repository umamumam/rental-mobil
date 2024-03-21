<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Mobil;
use App\Http\Requests\MobilRequest;
use Illuminate\Http\Request;

class MobilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $mobils = Mobil::where('merek', 'like', "%$search%")
                    ->orWhere('model', 'like', "%$search%")
                    ->orWhere('status', 'like', "%$search%")
                    ->orWhere('keterangan', 'like', "%$search%")
                    ->get();

        return view('mobils.index', compact('mobils'));
    }
    public function data()
    {
        $mobils = Mobil::all(); // Ambil semua data mobil
        return view('data', compact('mobils'));
    }
    public function datasplit()
    {
        $mobils = Mobil::all(); // Ambil semua data mobil
        return view('datasplit', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('mobils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MobilRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'merek' => 'required',
            'model' => 'required',
            'no_plat' => 'required',
            'tarif' => 'required|integer',
            'kapasitas' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);

        $mobil = new Mobil;

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/photos', $filename);
            $mobil->foto = $filename;
        }

        $mobil->merek = $request->input('merek');
        $mobil->model = $request->input('model');
        $mobil->no_plat = $request->input('no_plat');
        $mobil->tarif = $request->input('tarif');
        $mobil->kapasitas = $request->input('kapasitas');
        $mobil->status = $request->input('status');
        $mobil->keterangan = $request->input('keterangan');
        $mobil->save();

        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobils.show',['mobil'=>$mobil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobils.edit',['mobil'=>$mobil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MobilRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MobilRequest $request, $id)
{
    $mobil = Mobil::findOrFail($id);

    $validatedData = $request->validate([
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        'merek' => 'required',
        'model' => 'required',
        'no_plat' => 'required',
        'tarif' => 'required|integer',
        'kapasitas' => 'required',
        'status' => 'required',
        'keterangan' => 'required',
    ]);

    if ($request->hasFile('foto')) {
        $filename = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/photos', $filename);
        $mobil->foto = $filename;
    }

    $mobil->merek = $request->input('merek');
    $mobil->model = $request->input('model');
    $mobil->no_plat = $request->input('no_plat');
    $mobil->tarif = $request->input('tarif');
    $mobil->kapasitas = $request->input('kapasitas');
    $mobil->status = $request->input('status');
    $mobil->keterangan = $request->input('keterangan');
    $mobil->save();

    return redirect()->route('mobils.index')->with('success', 'Mobil berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();

        return to_route('mobils.index');
    }
}
