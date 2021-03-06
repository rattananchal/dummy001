<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Answer;

class Question extends Model
{
    //
    public function user()
    {
        return $this -> belongsTo('App\User');
    }

    public function answer()
    {
        return $this ->hasMany('App\Answer');
    }
}
