<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchanges extends Model
{
    protected $fillable = [

        'book_wanted', 'book_offered', 'requested_by', 'requested_to', 'status'

    ];
}
