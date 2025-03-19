<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblHasilPenugasan extends Model
{
    protected $fillable = [
        'user_id',
        'penugasan_id',
        'file_path',
        'link',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penugasan()
    {
        return $this->belongsTo(TblPenugasan::class, 'penugasan_id');
    }
}
