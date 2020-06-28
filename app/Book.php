<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [

        'name', 'author', 'description','image','condition','belongs_to'

    ];
}
