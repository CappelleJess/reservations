<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type'
    ];

    protected $table = 'types';
    
    public $timestamps = false;
}
