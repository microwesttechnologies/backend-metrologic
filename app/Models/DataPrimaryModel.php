<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPrimaryModel extends Model
{
    protected $table = 'metadata';

    protected $primaryKey = 'id';

    protected $fillable = [
    ];

    public function mainData()
    {
        return $this->hasOne(MainDataModel::class, 'id_meta', 'id');
    }

    public function coordinates()
    {
        return $this->hasOne(CoordinatesModel::class, 'id_meta', 'id');
    }

    public function wind()
    {
        return $this->hasOne(WindModel::class, 'id_meta', 'id');
    }
}
