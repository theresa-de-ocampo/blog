<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body', 'id'];
    // protected $guarded = ['id'];
    protected $guarded = []; // Never perform mass assignment unless you're in control of the array.
}
