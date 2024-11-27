<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class ArispController extends Controller
{
    public function index(){
        $data = kategori::all();
        return view('pages.kodearsip.data',[
            'data' => $data
        ]);
    }
}
