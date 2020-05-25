<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Likes extends Model
{
    //
    protected $table = 'likes';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    public $guarded = [];

    public static function getLikes($postID){
        $sqlstat = "SELECT tr.id, tr.icono, coalesce(COUNT(lk.id),0) as cant FROM t_reacciones tr
                    left JOIN likes lk ON tr.id = lk.id_reaccion
                    and lk.id_post = :postID
                    GROUP BY tr.id, tr.icono;";

        $likes = DB::select($sqlstat, ["postID" => $postID]);
        //dd($likes[0]->id);
        return $likes;
    }
}
