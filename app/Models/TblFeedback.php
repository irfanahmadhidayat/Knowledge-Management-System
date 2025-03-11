<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblFeedback extends Model
{
    protected $fillable = [
        'submit_id',
        'user_id',
        'isi_feedback',
    ];
}
