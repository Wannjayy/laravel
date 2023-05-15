<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;
use App\Models\Prodi;
use Illuminate\Support\Str;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Fakultas::all();
        // dd($data);

        return view('fakultas.index')->with('datafakultas', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validasi = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas,nama_fakultas',
            'nama_dekan' => 'required',
            'nama_wakil_dekan' => 'required'
        ]);


        $fakultas = new Fakultas();
        $fakultas->id = Str::Uuid();
        $fakultas->nama_fakultas = $validasi['nama_fakultas'];
        $fakultas->nama_dekan = $validasi['nama_dekan'];
        $fakultas->nama_wakil_dekan = $validasi['nama_wakil_dekan'];
        $fakultas->save();

        return redirect()->route('fakultas.index')->with('success',"Data Fakultas ".$validasi['nama_fakultas']."Berhasil Disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fakultas = Fakultas::where('id', $id)->first();
        // dd($fakultas);
        $fakultas->delete();
        return redirect()->route('fakultas.index')
        ->with('success', 'Fakultas berhasil dihapus.');
        // if ($fakultas->prodi()->exists()) {
        //     return back()->withErrors('Fakultas memiliki prodi terkait dan tidak dapat dihapus.');
        // }
        // $fakultas->delete();

        // return redirect()->route('fakultas.index')
        // ->with('success', 'Fakultas berhasil dihapus.');
    }
}
