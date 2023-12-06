<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{

    public function index()
    {
        $mobil = Mobil::orderby('id', 'desc')->get();
        $data = [
            'mobil' => $mobil
        ];
        return view('admin.mobil.mobil', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'noplat' => 'required',
            'tarif_sewa_perhari' => 'required',
            'status' => 'required'
        ], [
            'merek' => 'merek wajib diisi !',
            'model' => 'model wajib diisi !',
            'noplat' => 'nopla twajib diisi !',
            'tarif_sewa_perhari' => 'tarif sewa perhari wajib diisi !',
            'status' => 'status wajib diisi !'
        ]);
        DB::table('mobils')->insert([
            'merek' => $request->merek,
            'model' => $request->model,
            'noplat' => $request->noplat,
            'tarif_sewa_perhari' => $request->tarif_sewa_perhari,
            'status' => $request->status,
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = DB::table('mobils')->where('id', $id)->first();
        $data = [
            'mobil' => $mobil
        ];
        return view('admin.mobil.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'noplat' => 'required',
            'tarif_sewa_perhari' => 'required',
            'status' => 'required'
        ], [
            'merek' => 'merek wajib diisi !',
            'model' => 'model wajib diisi !',
            'noplat' => 'nopla twajib diisi !',
            'tarif_sewa_perhari' => 'tarif sewa perhari wajib diisi !',
            'status' => 'status wajib diisi !'
        ]);
        DB::table('mobils')->where('id', $id)->update([
            'merek' => $request->merek,
            'model' => $request->model,
            'noplat' => $request->noplat,
            'tarif_sewa_perhari' => $request->tarif_sewa_perhari,
            'status' => $request->status,
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('mobils')->where('id', $id)->delete();
        return redirect()->route('mobil.index');
    }
}
