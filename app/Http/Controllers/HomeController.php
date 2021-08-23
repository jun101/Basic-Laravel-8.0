<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = "Fleuridor";
        return view('welcome',[
            'nom'=>$name,
        ]);
    }
    public function form(){
        return view('form');
    }
}
