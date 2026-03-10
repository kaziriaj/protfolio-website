<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'category', 'link', 'description', 'short_description', 'blog_image',
        'is_active', 'user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
