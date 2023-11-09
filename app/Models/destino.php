<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destino extends Model
{
    use HasFactory;
    protected $table = 'tb_destino';
    protected $primaryKey = 'id_destino';
    protected $fillable = [
        'destino',
    ];
}
