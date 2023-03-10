<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Community extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
