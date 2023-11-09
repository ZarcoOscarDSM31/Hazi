<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    use HasFactory;

    protected $table = 'tb_direccion';
    protected $primaryKey = 'id_direccion';
    protected $fillable = [
        'calle',
        'no_interior',
        'no_exterior',
        'cop',
    ];
}
