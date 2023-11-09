<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = 'tb_cliente';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'nombre',
        'app',
        'apm',
        'sexo',
        'fk_id_direccion',
    ];
}
