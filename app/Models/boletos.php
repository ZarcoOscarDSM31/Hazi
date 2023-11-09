<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boletos extends Model
{
    use HasFactory;
    protected $table = 'tb_boletos';
    protected $primaryKey = 'id_boletos';
    protected $fillable = [
        'precio',
        'fecha_compra',
        'fecha_salida',
        'fk_id_cliente',
        'fk_id_destino',
    ];
}
