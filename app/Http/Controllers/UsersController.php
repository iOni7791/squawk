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

class UsersController extends Controller
{
    //
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

    public function nest($user = 0)
    {
        $muser = 0+$user;

        if (Auth::user()):
            $activo = 1;
            if ($muser == 0):
                $usuarioActual = User::where('id', Auth::user()->id )->get()[0];
            else:
                $usuarioActual = User::where('id', $muser)->get()[0];
            endif;
            $esuser = Auth::user()->id == $usuarioActual['id'];
            $postsCount = Comentarios::all()->where('id_usuario', $usuarioActual['id'])->count();
            $friendsnro = Friends::all()->where('id_usuario', $usuarioActual['id'])->count();
            $posts =  Posts::all()->where('id_usuario', $usuarioActual['id'])->SortByDesc('id');
            $usuarioActual['postsCount'] = $postsCount;
            $usuarioActual['friendsnro'] = $friendsnro;

            foreach ($posts as $lugar=>$unpost):
                $postUser = Posts::getUser($unpost['id_usuario']);
                $posts[$lugar]['postUser'] = $postUser[0]['name'];
                $posts[$lugar]['postImg'] = $postUser[0]['imagen'];

                $coms = Comentarios::all()->where('id_post', $unpost['id']);
/*                foreach($coms as $luga2=>$comm):
                    $usuario = Comentarios::getUser($comm['id_usuario']);
                    $coms[$luga2]['usuario'] = $usuario[0]['name'];
                    $coms[$luga2]['usuarioimg'] = $usuario[0]['imagen'];
                endforeach; */
                $posts[$lugar]['coms'] = $coms;
                //$like = Likes::all()->where('id_post', $unpost['id']);
                $posts[$lugar]['likes'] = Likes::getLikes($unpost['id']);
            endforeach;
            //dd($usuarioActual);
            return view('nest',compact('activo','esuser','usuarioActual','postCount','posts'));
        else:
            return redirect('home');
        endif;
    }

    public function editdata()
    {
        if (Auth::user()):
            $datos = request();

            $usuarioActual = Auth::user();

            $param = request();
            //dd($param);
                if ($param):
                    $archi = null;
                    if ($param->hasFile('imagen') and $param->file('imagen')->isValid()):
                        $imagen = request()->imagen;
                        $archi = uniqid().".".request()->imagen->extension();
                        //dd($archi);
                    endif;
                    $usuarioActual->name = $param['name'];
                    $usuarioActual->bio = $param['bio'];
                    $usuarioActual->fecha_nac = $param['fecha_nac'];
                    $usuarioActual->genero_id = $param['genero'];
                    if ($archi):
                        $usuarioActual->imagen = $archi;
                    endif;

                    //dd($param, $usuarioActual, $archi);
                    if ( $usuarioActual->save() && $archi )
                        $file = $imagen->storeAs('public/img/profiles', $archi);
                endif;
                return redirect('profile');


        endif;
    }
    public function passreset()
    {
        $token = "";
        $activo = 4;

        if (Auth::user()):
            return view('auth.passwords.reset', compact('token', 'activo'));
        else:
            return redirect('profile');
        endif;
    }
}
