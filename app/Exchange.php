<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $fillable = [

        'book_wanted', 'book_offered', 'requested_by', 'requested_to', 'status'
    ];

    public function destinationId()
    {
        return $this->belongsTo('App\User','requested_to');
    }


    public function reviews()
    {
        return $this->hasMany('App\Book','book_wanted')->where('publish',1);
    }

    public function dispatches()
    {
        return $this->hasMany('App\User','requested_id')->where('publish',1);
    }
}
