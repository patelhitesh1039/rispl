<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flaggroup extends Model
{
    protected $table = 'flaggroup';

    protected $fillable = [
        'flagGroupName',
    ];
}
