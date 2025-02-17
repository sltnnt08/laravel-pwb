<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cast extends Model
{
    use HasFactory;
    protected $table = 'casts';
    protected $fillable = [
        'name',
        'age',
        'bio',
    ];
}
