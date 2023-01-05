<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    use HasFactory;
    protected $table='tb_dosen';
    protected $fillable=[
        'nama_dosen',
        'nip',
        'foto_dosen',
    ];
}
