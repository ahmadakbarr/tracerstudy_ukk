<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\TracerKerja;
use Illuminate\Http\Request;

class TracerKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tracerKerja = TracerKerja::with('alumni')->get(); 
        return view('admin.TracerKerja.index', compact('tracerKerja'));
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
    public function destroy($id)
    {
        $tracerKerja = TracerKerja::findOrFail($id);
        $tracerKerja->delete();

        return redirect()->route('admin.TracerKerja.index')->with('success', 'Data sekolah berhasil dihapus.');
    }
}
