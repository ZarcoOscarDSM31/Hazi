<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporte extends Model
{
    use HasFactory;
    protected $table = 'tb_transporte';
    protected $primaryKey = 'id_transporte';
    protected $fillable = [
        'capacidad',
        'peso',
        'no_asiento',
        'fk_id_destino',
    ];
}
