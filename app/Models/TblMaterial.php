<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblMaterial extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'materials_name',
        'description',
        'archive',
    ];
}
