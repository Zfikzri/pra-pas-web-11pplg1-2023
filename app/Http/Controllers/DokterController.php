<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    //
    public static function index(){
        return view('dokter/all2', [
            "title" => "dokter",
            "dokter" => Dokter::all()
        ]);
    }

    public function show($dokter){
        return view('dokter.detail',[
            "title" => "detail.dokter",
            "dokter" => Dokter::find($dokter)
        ]);
    }
}
