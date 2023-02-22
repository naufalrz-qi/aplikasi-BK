<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use App\Models\Siswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $presensi = Presensi::all();
        return response(view('presensi.index', compact('presensi')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $siswa = Siswa::all();
        return response(view('presensi.create', compact('siswa')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'keterangan' => 'required|string|max:255',
            'hadir' => 'required|in:HADIR,TIDAK',
            'siswa_id' => 'required|exists:siswa,id'
        ]);

        $presensi = new Presensi;
        $presensi->keterangan = $request->keterangan;
        $presensi->siswa_id = $request->siswa_id;
        $presensi->hadir = $request->hadir;
        $presensi->save();

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presensi $presensi): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presensi $presensi): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presensi $presensi): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presensi $presensi): RedirectResponse
    {
        //
    }
}
