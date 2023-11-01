<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class News extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = [
        'title',
        'slug',
        'cover',
        'subtitle',
        'published',
        'content',
        'visit',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];


}
