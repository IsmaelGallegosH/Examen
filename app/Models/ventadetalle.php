<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventadetalle extends Model
{
    protected $table = "venta-detalle";
    protected $primaryKey = 'id_venta_detalle';
    protected $fillable = [
        'id_venta_detalle',
        'precio',
        'cantidad',
        'utilidad',
        'fk_id_venta',   
        'fk_id_producto',    
    ];
}
