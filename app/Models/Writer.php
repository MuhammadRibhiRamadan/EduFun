<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'speciality',
    ];

    // Relasi: satu penulis bisa memiliki banyak artikel
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
