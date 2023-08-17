<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailscontroller extends Controller
{
    public function test(){
        return view('details');
    }

    public function tester(){
        return view('tester');
    }
}
