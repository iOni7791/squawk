<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Posts;
use App\Comentarios;
use App\Likes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use phpDocumentor\Reflection\Types\This;
Use \Carbon\Carbon;
use DateTime;

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
        if (Auth::user() ):
            $user = Auth::user();
            $posts =  Posts::all()->where('id_usuario', $user['id'])->SortByDesc('id');
            foreach ($posts as $lugar=>$unpost):
                $coms = Comentarios::all()->where('id_post', $unpost['id']);
                foreach($coms as $luga2=>$comm):
                    $usuario = Comentarios::getUser($comm['id_usuario']);
                    $coms[$luga2]['usuario'] = $usuario[0]['name'];
                    $coms[$luga2]['usuarioimg'] = $usuario[0]['imagen'];
                endforeach;
                $posts[$lugar]['coms'] = $coms;
                $like = Likes::all()->where('id_post', $unpost['id']);
                $posts[$lugar]['likes'] = $like;
            endforeach;
            //dd($posts);

            $activo = 4;
            return view('posts',compact('activo', 'posts', 'user'));
        else:
            return $this->goPosts();
        endif;
    }

    public function friends()
    {
        if (Auth::user() ):
            $activo = 2;
            return view('friends',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }

    public function logout(){

        Auth::logout();
        return $this->goPosts();
        //asdfasdf
    }

    public function profile()
    {
        $activo = 1;
        if (Auth::user()):
            return view('profile',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }

}
