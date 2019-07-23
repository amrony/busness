<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    public function article_sub_categories(){
        return $this->hasMany('App\ArticleSubCategory');
    }
}
