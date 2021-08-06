<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome(Request $request)
    {           
        if (\Auth::check()) {
            return redirect(route('dashboard.index'));
        } else {
            return view("welcome");            
        }                       
    }
}
