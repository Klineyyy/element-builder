<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionModel extends Model
{
    protected $table = 'ph_region';

    protected $fillable = [
        'psgcCode',
        'regDesc',
        'regCode'
    ];
}
