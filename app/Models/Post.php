<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Comment;
use App\Models\Category;
class Post extends Model
{
    public $guarded = [''];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName(){
       return 'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        $comments = $this->hasMany(Comment::class);
        foreach ($comments as $c) {
            $c->setAttribute('added_at',$c->created_at->diffForHumans());
        }
        return $comments;
    }
}
