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
            return $this->posts();
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

public function addpost(){
    if (Auth::user() ):
            $usuarioActual = Auth::user();
            $param = request();
            //dd($param['texto'], request()->imagen);

            if (request()):
                if (request()->hasFile('imagen') and request()->file('imagen')->isValid())
                    $imagen = request()->imagen;
                    $archi = uniqid().".".request()->imagen->extension();
                    $file = $imagen->storeAs('public/img/posts', $archi);
                    //dd($archi);

/*
                $usuarioAcatual = $_SESSION['usuario'];

                $sqlstat  = "insert into posts set";
                $sqlstat .= " id_usuario = :idUsuario,";
                $sqlstat .= " contenido_p = :imagen,";
                $sqlstat .= " descripcion = :texto";

                $query = $db->prepare($sqlstat);
                $query->bindValue(':idUsuario', $usuarioAcatual["id"], PDO::PARAM_INT);
                $query->bindValue(':texto',  $_POST["texto"], PDO::PARAM_STR);

                if ($_FILES["imagen"]["name"] != ""):
                    $ext = pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION);
                    $archi = uniqid().".".$ext;
                    move_uploaded_file($_FILES["imagen"]["tmp_name"],"imgs/posts/".$archi);
                    $query->bindValue(':imagen',$archi, PDO::PARAM_STR);
                else:
                    $query->bindValue(':imagen','', PDO::PARAM_STR);
                endif;
                $query->execute();
*/            endif;
            return $this->posts();
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

        if (Auth::user() ):
            Auth::logout();
            return $this->goPosts();
        endif;
        //asdfasdf
    }

    public function profile()
    {
        if (Auth::user()):
            $activo = 1;
            return view('profile',compact('activo'));
        else:
            return $this->goPosts();
        endif;
    }

    public function getLikes($postID){
        $db = conectarBase();

        $sqlstat = "select * from t_reacciones";
        $sqlstat = "SELECT tr.id, tr.icono, coalesce(COUNT(lk.id),0) as cant FROM t_reacciones tr
                    left JOIN likes lk ON tr.id = lk.id_reaccion
                    and lk.id_post = :postID
                    GROUP BY tr.id;";

        $query = $db->prepare($sqlstat);
        $query->bindValue(":postID", $postID, PDO::PARAM_INT);
        $query->execute();

        $likes = $query->fetchAll(PDO::FETCH_ASSOC);

        $toLikes = "";
        foreach($likes as $like):
            //  var_dump($postID);
            $toLikes .= '<a href="dolike.php?likeid=' .$like['id'] .'&post=' .$postID .'">';
            $toLikes .= '<img src="imgs/reacciones/' .$like['icono'] .'" width="15%">';
            $toLikes .= "</a><spam>" .$like["cant"] ."</spam>&nbsp;";
        endforeach;

        return $toLikes;
    }

}
