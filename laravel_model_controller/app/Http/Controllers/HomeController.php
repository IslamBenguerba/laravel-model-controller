<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $dati = Movie::all();

        return view('home',['films'=>$dati]);
    }
}
