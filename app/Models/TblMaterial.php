<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class TblMaterial extends Model
{
    protected $fillable = [
        'role_id',
        'material_name',
        'material_description',
        'file_path',
        'link',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
