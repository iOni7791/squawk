<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Posts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use phpDocumentor\Reflection\Types\This;

class pages extends Controller
{
    //
    protected function goPosts(){
        $activo = 1;
        return view('home',compact('activo'));
    }

    public function index()
    {
        $activo = 1;
        if (Auth::guest()):
            return view('home',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }
    public function milogin()
    {
        $activo = 2;
        if (Auth::guest()):
            return view('auth.login',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }
    public function miregister()
    {
        $activo = 3;
        if (Auth::guest()):
            return view('auth.register',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }
    public function faq()
    {
        $activo = 4;
        if (Auth::guest()):
            return view('faq',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }
    public function contact()
    {
        $activo = 5;
        if (Auth::guest()):
            return view('contact',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }
    public function posts()
    {
        $posts =  Posts::all()->where('id_usuario', '1');
        //dd($posts);

        $activo = 4;
        if (Auth::guest() ):
            return view('posts',compact('activo', 'posts'));
        else:
            return $this->goPosts();
        endif;
    }
    public function friends()
    {
        $activo = 2;
        if (Auth::guest()):
            return view('friends',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }
}
