<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblSubmit extends Model
{
    //
    protected $fillable = [
        'submit_id',
        'tugas_id',
        'user_id',
        'gambar',
        'pdf',
        'link_url',
        'status',
        'create_time',
        'update_time',
    ];
}
