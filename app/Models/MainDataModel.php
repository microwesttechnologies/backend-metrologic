<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDataModel extends Model
{
    protected $table = 'main_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'temp',
        'feels_like',
        'temp_min',
        'temp_max',
        'pressure',
        'humidity',
        'sea_level',
        'grnd_level',
        'id_meta',
    ];


}