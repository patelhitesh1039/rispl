<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Systemflag extends Model
{
    protected $table = 'systemflag';

    protected $fillable = [
        'valueType',
        'name',
        'value',
        'displayName',
        'flagGroupId',
    ];
}
