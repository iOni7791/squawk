<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comentarios extends Model
{
    //
    protected $table = 'comentarios';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    public $guarded = [];

    public static function getUser($commentId){
        $user = User::where('id', $commentId)->get();
        return $user;
    }
}
