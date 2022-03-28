<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    /**
     * Get the posts that owns the Comments
     *
     * @return \Illuminate\Dat'Posts' */
    public function posts()
    {
        return $this->belongsTo('Posts');
    }
}
