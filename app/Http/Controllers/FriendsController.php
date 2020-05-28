<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Posts;
use App\Comentarios;
use App\Likes;
use App\Friends;

class FriendsController extends Controller
{
    //
    public function friends()
    {
        if (Auth::user() ):
            $activo = 2;

            $usuarioActual = User::where('id', Auth::user()->id )->get()[0];
            $posts = Comentarios::all()->where('id_usuario', Auth::user()->id)->count();
            $friendsnro = Friends::all()->where('id_usuario', Auth::user()->id)->count();
            $usuarioActual['posts'] = $posts;
            $usuarioActual['friendsnro'] = $friendsnro;

            return view('friends',compact('activo','usuarioActual'));
        else:
            return redirect('home');
        endif;
    }

}
