<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Posts;
use App\Comentarios;
use App\Likes;
use App\Friends;

class PostsController extends Controller
{
    //

    public function posts()
    {
        if (Auth::user() ):
            $user = Auth::user();
//          $posts =  Posts::all()->where('id_usuario', $user['id'])->SortByDesc('id');
            $posts =  Posts::all()->SortByDesc('id');

            foreach ($posts as $lugar=>$unpost):
                $postUser = Posts::getUser($unpost['id_usuario']);
                $posts[$lugar]['idUser'] = $postUser[0]['id'];
                $posts[$lugar]['postUser'] = $postUser[0]['name'];
                $posts[$lugar]['postImg'] = $postUser[0]['imagen'];

                $com = Comentarios::where('id_post', $unpost['id'])->count();
                $posts[$lugar]['comentcount'] = $com;

                $coms = Comentarios::where('id_post', $unpost['id'])->latest()->take(1)->get();
                //dd($coms);
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

    public function unpost($mid)
    {
        $unPost =  Posts::where('id',$mid)->get()[0];

        if (Auth::user() && $unPost):
            $user = Auth::user();
            //dd($unPost);
            $postUser = Posts::getUser($unPost['id_usuario'])[0];
            $unPost['postUser'] = $postUser['name'];
            $unPost['postImg'] = $postUser['imagen'];

            $coms = Comentarios::all()->where('id_post', $unPost['id']);
            foreach($coms as $luga2=>$comm):
                $usuario = Comentarios::getUser($comm['id_usuario'])[0];
                $coms[$luga2]['usuario'] = $usuario['name'];
                $coms[$luga2]['usuarioimg'] = $usuario['imagen'];
            endforeach;
            $unPost['coms'] = $coms;
            //$like = Likes::all()->where('id_post', $unpost['id']);
            $unPost['likes'] = Likes::getLikes($unPost['id']);

            $activo = 3;
            //dd($unPost['likes']);
            return view('unpost',compact('activo', 'unPost', 'user'));
        else:
            return redirect('posts');
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

    public function addLike($postid, $likeid){

        if (Auth::user() ):
            $usuarioActual = Auth::user();
            $like = Likes::where('id_usuario', $usuarioActual['id'])->where('id_post', $postid)->get();

            if (!isset($like[0])):
                $mlike = new Likes();
                $mlike->id_usuario = $usuarioActual['id'];
                $mlike->id_post = $postid;
                $mlike->id_reaccion = $likeid;
            else:
                $mlike = $like[0];
            endif;

            $mlike->id_reaccion = $likeid;
            $mlike->save();

            return redirect('posts');
        endif;
    }

    public function editpost($mid)
    {
        $unPost =  Posts::where('id',$mid)->get()[0];

        if (Auth::user() && $unPost):
            $user = Auth::user();
            //dd($unPost);
            $postUser = Posts::getUser($unPost['id_usuario'])[0];
            $unPost['postUser'] = $postUser['name'];
            $unPost['postImg'] = $postUser['imagen'];

            $coms = Comentarios::all()->where('id_post', $unPost['id']);
            foreach($coms as $luga2=>$comm):
                $usuario = Comentarios::getUser($comm['id_usuario'])[0];
                $coms[$luga2]['usuario'] = $usuario['name'];
                $coms[$luga2]['usuarioimg'] = $usuario['imagen'];
            endforeach;
            $unPost['coms'] = $coms;
            //$like = Likes::all()->where('id_post', $unpost['id']);
            $unPost['likes'] = Likes::getLikes($unPost['id']);

            $activo = 3;
            //dd($unPost['likes']);
            return view('editpost',compact('activo', 'unPost', 'user'));
        else:
            return redirect('posts');
        endif;
    }

}
