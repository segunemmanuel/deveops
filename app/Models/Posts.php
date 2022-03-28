<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;


class Posts extends Model
{
    use HasFactory;


    /**
     * Get all of the comments for the Posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comments::class, 'post_id', 'id');
    }

    /**
     * Get all of the upvo for the Posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function votes()
    {
        return $this->hasMany(Upvotes::class, 'post_id', 'id');
    }
}
