<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = "producto";
    protected $primaryKey = 'upc';
    protected $casts = ['upc' => 'string'];
    protected $fillable = [
        'upc',
        'descripcion',
        'costo',
        'precio',
        'existencia', 
    ];}
