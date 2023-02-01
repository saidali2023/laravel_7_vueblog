<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Comment extends Model
{
    
    public $guarded = [''];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
