<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = array('title','body','user_id','cover_image');

    public function user(){
        return $this->belongsTo('App\User');
    }
}
