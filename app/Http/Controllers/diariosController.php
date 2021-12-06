<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class diariosController extends Controller
{
    public function __invoke(){
        return view('index.html');
    }

}