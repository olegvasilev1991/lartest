<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function incomplete(){
        return static ::where('completed',1)->get();
    }
    public static function notcomplete(){
        return static ::where('completed',0)->get();
    }

}
