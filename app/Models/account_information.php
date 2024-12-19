<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class account_information extends Model
{
    protected $table = 'account_information';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'profile_picture',
        'account_id',
        
    ];
}
