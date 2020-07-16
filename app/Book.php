<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Book extends Model
{
    use Notifiable,HasApiTokens;
    protected $fillable = [

        'name', 'author', 'description','image','condition','belongs_to'

    ];

    public function userID()
    {
        return $this->belongsTo('App\User','belongs_to');
    }


    protected $hidden = [
        'password', 'remember_token',
    ];
}
