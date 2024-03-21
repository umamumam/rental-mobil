<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jam;

class JamController extends Controller
{
    public function index()
    {
        $jams = Jam::all();
        return view('jams.index', compact('jams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_waktu' => 'required',
            'jam' => 'required_if:jenis_waktu,jam|integer|min:0|max:23',
            'hari' => 'required_if:jenis_waktu,hari|integer|min:0',
        ]);

        Jam::create($request->all());
        return redirect()->route('jams.index');
    }
    public function create()
{
    return view('jams.create');
}
}
