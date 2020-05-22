<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    //
    protected $table = 'likes';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    public $guarded = [];
}
