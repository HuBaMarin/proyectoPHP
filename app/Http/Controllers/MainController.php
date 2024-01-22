<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $numero = rand(1,10);
        return view("saludo",["numero"=>$numero]);
    }
}
