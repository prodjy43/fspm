<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $guarded = [];
    public $timestamps = false;

    public function news(){
        return $this->belongsToMany(News::class);
    }
}
