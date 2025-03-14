<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblModul extends Model
{
    protected $fillable = [
        'materi_id',
        'user_id',
        'judul_modul',
        'deskripsi',
        'gambar',
        'pdf',
        'link_url',
        'archive',
    ];
}
