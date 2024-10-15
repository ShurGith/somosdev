<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'date:Y-s-M',
    ];

    public function user():BelongsTo
    {
        return $this->BelongsTo(User::class, 'id');
    }
    public function categories():belongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_post');
    }

}
