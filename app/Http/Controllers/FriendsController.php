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
    public function friends($id = 0)
    {
        $muser = 0+$id;

        if (Auth::user()):
            $activo = 2;
            if ($muser == 0):
                $usuarioActual = User::where('id', Auth::user()->id )->get()[0];
            else:
                $usuarioActual = User::where('id', $muser)->get()[0];
            endif;

            $posts = Comentarios::all()->where('id_usuario', $usuarioActual['id'])->count();
            $friendslist = Friends::all()->where('id_usuario', $usuarioActual['id']);
            $usuarioActual['posts'] = $posts;
            $usuarioActual['friendsnro'] = $friendslist->count();
            foreach($friendslist as $pos=>$unuser):
                $friendslist[$pos]['usuario'] = User::where('id', $unuser['id_amigo'])->get()[0];

                $friendslist[$pos]['friendsno'] = Friends::all()
                                                    ->where('id_usuario', $friendslist[$pos]['usuario']['id'])
                                                    ->count();

                $susamigos = Friends::all()
                                ->where('id_usuario', $friendslist[$pos]['usuario']['id'])
                                ->where('id_amigo',  Auth::user()->id);

                $friendslist[$pos]['friendsme'] = $susamigos->count();

                $cuantos = Friends::all()->where('id_amigo', $unuser['id_amigo'])
                            ->where('id_usuario',  Auth::user()->id)
                            ->count();

                            $friendslist[$pos]['esamigo'] =  $cuantos == 1;

                $friendslist[$pos]['soyyo'] =  $friendslist[$pos]['usuario']['id'] == Auth::user()->id;
            endforeach;
            $usuarioActual['friends'] = $friendslist;
            //dd($usuarioActual['friends']);
            return view('friends',compact('activo','usuarioActual'));
        else:
            return redirect('home');
        endif;
    }

    public function addfriend($mid = 0){
        if (Auth::user()):
            $activo = 2;
            $amigo = new Friends();
            $amigo->id_usuario =  Auth::user()->id;
            $amigo->id_amigo = $mid;
            $amigo->save();
            return redirect('friends');
        endif;
    }

}
