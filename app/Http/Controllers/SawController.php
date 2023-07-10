<?php

namespace App\Http\Controllers;

use App\Models\Normalisasi;
use Illuminate\Http\Request;
use App\Models\Hasil;

class SawController extends Controller
{
    public function sawnormalisasi(){
        return view('job.normalisasi', [
            'normalisasi' => Normalisasi::all()
        ]);
    }

    public function sawhasil(){
        return view('job.hasil', [
            'hasil' => Hasil::all()
        ]);
    }
}
