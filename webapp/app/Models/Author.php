<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['author_name'];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
