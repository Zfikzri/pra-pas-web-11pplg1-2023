<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengadopsi;

class PengadopsiController extends Controller
{
    //
    public static function index(){
        return view('pengadopsi/all3', [
            "title" => "pengadopsi",
            "pengadopsi" => Pengadopsi::all()
        ]);
    }

    public function show($pengadopsi){
        return view('pengadopsi.detail',[
            "title" => "detail.pengadopsi",
            "pengadopsi" => Pengadopsi::find($pengadopsi)
        ]);
    }
}
