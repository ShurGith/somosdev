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
    public function categories():belongsToMany
    {
       return $this->belongsToMany(Category::class)->withPivot('user_id');
    }

}
