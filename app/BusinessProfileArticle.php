<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessProfileArticle extends Model
{
    protected $fillable = ['business_profile_id','title','short_description','long_description','image'];
    public function business_profile(){
        return $this->belongsTo(BusinessProfile::class);
    }
}
