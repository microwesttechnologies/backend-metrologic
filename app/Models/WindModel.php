<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WindModel extends Model
{
    protected $table = 'wind';
    protected $primaryKey = 'id';
    protected $fillable = [
        'speed',
        'deg',
        'gust',
        'id_meta',
    ];


}