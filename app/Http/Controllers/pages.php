<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Posts;
use App\Comentarios;
use App\Likes;
use App\Friends;

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

    public function posts()
    {
        if (Auth::user() ):
            $user = Auth::user();
//          $posts =  Posts::all()->where('id_usuario', $user['id'])->SortByDesc('id');
            $posts =  Posts::all()->SortByDesc('id');

            foreach ($posts as $lugar=>$unpost):
                $postUser = Posts::getUser($unpost['id_usuario']);
                $posts[$lugar]['postUser'] = $postUser[0]['name'];
                $posts[$lugar]['postImg'] = $postUser[0]['imagen'];

                $coms = Comentarios::all()->where('id_post', $unpost['id']);
                foreach($coms as $luga2=>$comm):
                    $usuario = Comentarios::getUser($comm['id_usuario']);
                    $coms[$luga2]['usuario'] = $usuario[0]['name'];
                    $coms[$luga2]['usuarioimg'] = $usuario[0]['imagen'];
                endforeach;
                $posts[$lugar]['coms'] = $coms;
                //$like = Likes::all()->where('id_post', $unpost['id']);
                $posts[$lugar]['likes'] = Likes::getLikes($unpost['id']);
            endforeach;
            //dd($posts);

            $activo = 3;
            return view('posts',compact('activo', 'posts', 'user'));
        else:
            return redirect('home');
        endif;
    }

    public function addpost(){
        if (Auth::user() ):
                $usuarioActual = Auth::user();
                $param = request();
                //dd($param['texto'], request()->imagen);

                if (request()):
                    $archi = null;
                    if (request()->hasFile('imagen') and request()->file('imagen')->isValid()):
                        $imagen = request()->imagen;
                        $archi = uniqid().".".request()->imagen->extension();
                        //dd($archi);
                    endif;
                    $elPost = new Posts();
                    $elPost->id_usuario = $usuarioActual['id'];
                    $elPost->contenido_p = $archi;
                    $elPost->descripcion = $param['texto'];
                    if ( $elPost->save() && $archi )
                        $file = $imagen->storeAs('public/img/posts', $archi);
                endif;
                return redirect('posts');
        endif;
    }

    public function addcomment(){
        if (Auth::user() ):
                $usuarioActual = Auth::user();
                $param = request();
                //dd($param['texto'], request()->imagen);

                if (request()):
                    $elCom = new Comentarios();
                    $elCom->id_usuario = $usuarioActual['id'];
                    $elCom->id_post = $param['postid'];
                    $elCom->contenido_C = $param['comment'];
                    $elCom->save();

                    return redirect('posts');
                endif;
        endif;
    }

    public function friends()
    {
        if (Auth::user() ):
            $activo = 2;
            return view('friends',compact('activo'));
        else:
            return redirect('home');
        endif;
    }

    public function logout(){

        if (Auth::user() ):
            Auth::logout();
            return redirect('home');
        endif;
        //asdfasdf
    }

    public function profile()
    {
        if (Auth::user()):
            $activo = 4;
            $usuarioActual = User::where('id', Auth::user()->id )->get()[0];
            $posts = Comentarios::all()->where('id_usuario', Auth::user()->id)->count();
            $friendsnro = Friends::all()->where('id_usuario', Auth::user()->id)->count();
            $usuarioActual['posts'] = $posts;
            $usuarioActual['friendsnro'] = $friendsnro;

            return view('profile',compact('activo','usuarioActual'));
        else:
            return redirect('home');
        endif;
    }

    public function nest()
    {
        if (Auth::user()):
            $activo = 1;
            return view('nest',compact('activo'));
        else:
            return redirect('home');
        endif;
    }
}
