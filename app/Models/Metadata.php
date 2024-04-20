<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $table = 'metadata';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'visibility',
        'dt',
        'timezone',
        'city_id',
        'city_name',
        'cod',
        'timeQuery'
    ];

}
