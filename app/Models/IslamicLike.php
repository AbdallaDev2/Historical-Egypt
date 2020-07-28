<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IslamicLike extends Model
{
    protected $table='islamic_likes';

    protected $fillable = ['post_id','user_id', 'like'];




    public function posts(){

        return $this->belongsTo(Islamic::class );
    }

    public function user(){

        return $this->belongsToMany(\App\User::class);

    }
}
