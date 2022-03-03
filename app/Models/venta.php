<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{

    protected $table = "ventas";
    protected $primaryKey = 'id_venta';
    protected $fillable = [
        'id_venta',
        'total',
        'estatus',
        'fk_id_empleado',
        'fk_id_cliente',       
    ];

}
