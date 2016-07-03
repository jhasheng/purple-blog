<?php

namespace App\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\App\Models\Post
 *
 * @mixin \Eloquent
 */
class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'content'];
}
