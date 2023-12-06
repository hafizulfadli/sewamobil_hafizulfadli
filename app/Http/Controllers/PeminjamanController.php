<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = DB::table('peminjamans')
            ->select('*', 'peminjamans.id as id')
            ->join('users', 'peminjamans.pengguna_id', '=', 'users.id')
            ->join('mobils', 'peminjamans.mobil_id', '=', 'mobils.id')
            ->get();
        $data = [
            'peminjaman' => $peminjaman
        ];
        return view('admin.peminjaman.peminjaman', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mobil = DB::table('mobils')->where('status', 'tersedia')->get();
        $data = [
            'mobil' => $mobil
        ];
        return view('admin.peminjaman.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pengguna_id' => 'required',
            'mobil_id' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'status' => 'required'
        ]);
        $peminjaman = DB::table('peminjamans')->insert([
            'pengguna_id' => Auth::users()->id,
            'mobil_id' => $request->mobil_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => $request->status,
        ]);
        return redirect()->route('peminjaman.index');
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
        //
    }
}
