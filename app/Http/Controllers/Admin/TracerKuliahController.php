<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TracerKuliah;
use Illuminate\Http\Request;

class TracerKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tracerKuliah = TracerKuliah::with('alumni')->get(); 
        return view('admin.TracerKuliah.index', compact('tracerKuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
        $tracerKuliah = TracerKuliah::findOrFail($id);
        $tracerKuliah->delete();

        return redirect()->route('admin.TracerKuliah.index')->with('success', 'Data sekolah berhasil dihapus.');
    }
}
