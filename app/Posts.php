<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    public $guarded = [];

    public static function getUser($postId){
        $user = User::where('id', $postId)->get();
        return $user;
    }
}
