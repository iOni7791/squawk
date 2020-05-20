<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    //
    public function index()
    {
        $activo = 1;
        return view('home',compact('activo'));
    }
    public function login()
    {
        $activo = 2;
        return view('home',compact('activo'));
    }
    public function register()
    {
        $activo = 3;
        return view('home',compact('activo'));
    }
    public function faq()
    {
        $activo = 4;
        return view('home',compact('activo'));
    }
    public function contact()
    {
        $activo = 5;
        return view('home',compact('activo'));
    }
}
