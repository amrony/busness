<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyingAdvice extends Model
{
    public function article_category(){
        return $this->belongsTo(BuyingAdvice::class);
    }
}
