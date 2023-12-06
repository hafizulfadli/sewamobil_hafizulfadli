<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalian = DB::table('pengembalians')
            ->select('*', 'pengembalians.id as id')
            ->join('peminjamans', 'pengembalians.peminjaman_id', '=', 'peminjamans.id')
            ->join('users', 'peminjamans.pengguna_id', '=', 'users.id')
            ->get();
        $data = [
            'pengembalian' => $pengembalian
        ];
        return view('admin.pengembalian.pengembalian', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
