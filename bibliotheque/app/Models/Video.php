<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title','url','description','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
