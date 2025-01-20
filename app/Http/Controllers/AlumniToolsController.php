<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\KonsentrasiKeahlian;
use App\Models\StatusAlumni;
use App\Models\TahunLulus;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class AlumniToolsController extends Controller
{
    public function index()
    {
        $alumni = Alumni::with(['konsentrasiKeahlian', 'tahunLulus', 'statusAlumni'])->get();

        return view('alumni.Dataalumni.index',compact('alumni'));
    }

    public Function show(){
        return view('alumni.Dataalumni.show', compact('alumni'));
    }
}
