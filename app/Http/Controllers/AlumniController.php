<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\KonsentrasiKeahlian;
use App\Models\StatusAlumni;
use App\Models\TahunLulus;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = Alumni::with(['tahun_lulus', 'konsentrasi_keahlian']);
        return view('alumni.dashboard', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Mendapatkan email user yang sedang login
    $userEmail = auth()->user()->email;

    // Mencari data alumni berdasarkan email user
    $alumni = Alumni::whereEmail($userEmail)->first();

    // Jika data alumni ditemukan, redirect ke dashboard dengan pesan sukses
    if ($alumni) {
        return redirect()->route('alumni.dashboard')->with('success', 'Anda sudah terdaftar sebagai alumni.');
    }

    // Jika data alumni tidak ditemukan, siapkan data untuk form tracer study
    $tahunLulus = TahunLulus::all();
    $konsentrasiKeahlian = KonsentrasiKeahlian::all();
    $statusAlumni = StatusAlumni::all();

    // Menampilkan form tracer study
    return view('alumni.tracerstudy.create', compact('tahunLulus', 'konsentrasiKeahlian', 'statusAlumni'));
}

    

    public function store(Request $request)
    {
        $request->validate([
            'id_tahun_lulus' => 'required|exists:tb_tahun_lulus,id_tahun_lulus',
            'id_konsentrasi_keahlian' => 'required|exists:tbl_konsentrasi_keahlian,id_konsentrasi_keahlian',
            'id_status_alumni' => 'required|exists:tbl_status_alumni,id_status_alumni',
            'nisn' => 'required|string|max:20',
            'nik' => 'required|string|max:20',
            'nama_depan' => 'required|string|max:50',
            'nama_belakang' => 'nullable|string|max:50',
            'jenis_kelamin' => 'required|string|max:10',
            'tempat_lahir' => 'required|string|max:20',
            'tgl_lahir' => 'required|date',
            'alamat' => 'nullable|string|max:50',
            'no_hp' => 'nullable|string|max:15',
            'akun_fb' => 'nullable|string|max:50',
            'akun_ig' => 'nullable|string|max:50',
            'akun_tiktok' => 'nullable|string|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|string|min:8',
        ]);

        Alumni::create($request->all());

        return redirect()->route('alumni.Dataalumni.index')->with('success', 'Data alumni berhasil ditambahkan!');
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
