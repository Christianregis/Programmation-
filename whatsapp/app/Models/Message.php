<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'message',
        'parent_id'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Message::class,'parent_id');
    }
    public function parent(){
        return $this->belongsTo(Message::class,'parent_id');
    }
}
