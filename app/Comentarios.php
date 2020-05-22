<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    //
    protected $table = 'comentarios';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    public $guarded = [];

}
