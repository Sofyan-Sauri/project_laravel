<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SofyanController extends Controller
{
    public function index(){
        return view('sauri.index');
    }

    public function index_next(){
        return view('sauri.index_next');
    }
}
