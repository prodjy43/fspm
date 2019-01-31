<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $fillable = ['title', 'content', 'image', 'user_id', 'slug'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
