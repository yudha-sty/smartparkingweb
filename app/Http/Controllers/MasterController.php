<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(){
        return view('pages/index');
    }

    public function monitoring(){
        return view('pages/transmisi_data/index');
    }
}
