<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class HewanController extends Controller
{
    //
    public static function index(){
        return view('hewan/all', [
            "title" => "hewan",
            "hewan" => Hewan::all()
        ]);
    }

    public function show($hewan){
        return view('hewan.detail',[
            "title" => "detail.hewan",
            "hewan" => Hewan::find($hewan)
        ]);
    }
}
