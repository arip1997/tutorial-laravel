<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function HanyaTest($data){
        return view('profile',compact('data'));
    }
}