<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/* uso HasMany */
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function posts(): HasMany
{
    return $this->hasMany(Post::class);
}
}