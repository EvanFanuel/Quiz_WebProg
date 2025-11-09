<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $fillable = ['name', 'specialization', 'image'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
