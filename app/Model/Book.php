<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function category()
    {
        return $this->belongsTo(\App\Model\Category::class, 'category_id');
    }

    protected $casts = [
        'release_date' => 'datetime',
    ];
}
