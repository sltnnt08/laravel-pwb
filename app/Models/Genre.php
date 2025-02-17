<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory;
    protected $table = "genres";
    
    protected $fillable = [
        'name', 
    ];
    public function Movie(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}
