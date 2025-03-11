<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblAssignment extends Model
{
    protected $fillable = [
        'user_id',
        'modul_id',
        'judul_tugas',
        'deskripsi',
        'deadline',
        'archive',
    ];
}
