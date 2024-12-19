<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'barangay_id',
        'municipality_id',
        'barangay_name',
    ];
}
