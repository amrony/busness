<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function additional_news(){
        return $this->hasMany('App\AdditionalNews');
    }
}
