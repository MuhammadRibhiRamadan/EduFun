<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $casts = [
    'published_at' => 'datetime',
    ];
        //
        public function category()
    {
        return $this->belongsTo(Category::class);
    }

        public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

}
