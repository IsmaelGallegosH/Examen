<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = "empleado";
    protected $primaryKey = 'id_empleado';
    protected $fillable = [
        'id_empleado',
        'nombre',
        'apellido',
        'telefono',
        'email',       
    ];
}
