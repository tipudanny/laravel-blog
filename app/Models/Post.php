<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //Post has many comment
    public function comments()
    {
        return $this->hasMany(Comment::class)->with( ['user', 'post', 'parent']);
    }

    public function onlyComments()
    {
        return $this->comments()->whereNull('parent_id');
       // return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class)->whereNotNull('parent_id');
    }
}
