<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'is_completed',
        'content'
    ];

    public $timestamps = true;

}
