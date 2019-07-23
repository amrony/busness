<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleSubCategory extends Model
{
    public function article_category(){
        return $this->belongsTo('App\ArticleCategory');
    }
}
