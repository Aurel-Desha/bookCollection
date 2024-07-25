<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookCollection extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'auteur',
        'description',
        'image_data'
    ];
}
