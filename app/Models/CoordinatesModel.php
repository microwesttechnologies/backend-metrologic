<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoordinatesModel extends Model
{
    protected $table = 'coordinates';

    protected $primaryKey = 'id';

    protected $fillable = [
        'lon',
        'lat',
        'id_meta',
    ];
}
