<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upvotes extends Model
{
    use HasFactory;

    /**
     * Get the post that owns the Upvotes
     *
     * @return \Illuminate\DatPostse\EloquentpostidsTo
     */
    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id', 'id');
    }
}
