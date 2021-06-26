<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    // f
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
