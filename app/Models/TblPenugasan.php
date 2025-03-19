<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;

class TblPenugasan extends Model
{
    protected $fillable = [
        'role_id',
        'penugasan_name',
        'penugasan_description',
        'file_path',
        'link',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function hasilPenugasan()
    {
        return $this->hasMany(TblHasilPenugasan::class, 'penugasan_id');
    }
}
