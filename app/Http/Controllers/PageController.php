<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Posts;
use App\Comentarios;
use App\Likes;
use App\Friends;
use App\Faq;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use PharIo\Manifest\Author;
//use phpDocumentor\Reflection\Types\This;
//Use \Carbon\Carbon;
//use DateTime;

class PageController extends Controller
{
    //
    public function index()
    {
        $activo = 1;
        if (Auth::guest()):
            return view('home',compact('activo'));
        else:
            return redirect('posts');
        endif;
    }

    public function milogin()
    {
        $activo = 2;
        if (Auth::guest()):
            return view('auth.login',compact('activo'));
        else:
            return redirect('home');
        endif;
    }

    public function miregister()
    {
        $activo = 3;
        if (Auth::guest()):
            return view('auth.register',compact('activo'));
        else:
            return redirect('home');
        endif;
    }

    public function faq()
    {
        $activo = 4;
        if (Auth::guest()):
            return view('faq',compact('activo'));
        else:
            return redirect('home');
        endif;
    }

    public function contact()
    {
        $activo = 5;
        if (Auth::guest()):
            return view('contact',compact('activo'));
        else:
            return redirect('home');
        endif;
    }

}
