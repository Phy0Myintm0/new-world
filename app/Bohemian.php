<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bohemian extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'photocover', 'photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'slug', 'status'
    ];
}

