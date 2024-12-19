<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    protected $table = 'accounts';

    protected $fillable = [
        'email',
        'password',
    ];
}
