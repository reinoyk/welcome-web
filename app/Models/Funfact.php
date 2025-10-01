<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funfact extends Model
{
    protected $fillable = ['name', 'fact', 'category_id'];
    
    /** @use HasFactory<\Database\Factories\FunfactFactory> */
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
