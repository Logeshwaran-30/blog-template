<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'name',
        'featured',
    ];

    // Default values (optional but recommended)
    protected $attributes = [
        'featured' => false,
    ];

    // Relationship: Category has many Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

