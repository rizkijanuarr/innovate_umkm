<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    use HasFactory;

    protected $fillable = ['visi', 'misi', 'image'];

    protected $casts = [
        'image' => 'array',
    ];
}
