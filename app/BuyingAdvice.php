<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyingAdvice extends Model
{
    protected $fillable = ['article_category_id','article_sub_category_id','title','body'];

    public function article_category(){
        return $this->belongsTo(BuyingAdvice::class);
    }
    public function additional_buying_advices(){
        return $this->hasMany(AdditionalBuyingAdvice::class);
    }
}
