<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

// protected $fillable = ['title','description'];
#[Fillable(['title', 'description','image'])]

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
