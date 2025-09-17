<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funfacts extends Model
{
    protected $fillable = ['name', 'fact'];
    
    /** @use HasFactory<\Database\Factories\FunfactsFactory> */
    use HasFactory;
}
