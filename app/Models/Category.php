<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    protected $fillable = ['name', 'description'];

    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public function funfacts()
    {
        return $this->hasMany(Funfact::class);
    }
}
