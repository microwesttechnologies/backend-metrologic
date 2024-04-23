<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataPrimaryModel;
use App\Models\MetadataModel;
use Illuminate\Http\Request;

class DataPrimaryController extends Controller
{
    public function getDataPrimaryById($id)
    {
        $dataprimary = DataPrimaryModel::select(
            'metadata.id',
            'main_data.temp_min',
            'main_data.temp_max',
            'main_data.temp',
            'metadata.timeQuery',
            'coordinates.lon',
            'coordinates.lat',
            'wind.speed',
            'wind.deg'
        )
            ->join('main_data', 'main_data.id_meta', '=', 'metadata.id')
            ->join('coordinates', 'coordinates.id_meta', '=', 'metadata.id')
            ->join('wind', 'wind.id_meta', '=', 'metadata.id')
            ->where('metadata.id', $id)
            ->get();

        return response()->json($dataprimary);
    }

    public function getAllDataPrimary()
    {
        $dataprimary = DataPrimaryModel::select(
            'metadata.id',
            'main_data.temp_min',
            'main_data.temp_max',
            'main_data.temp',
            'metadata.timeQuery',
            'coordinates.lon',
            'coordinates.lat',
            'wind.speed',
            'wind.deg'
        )
            ->join('main_data', 'main_data.id_meta', '=', 'metadata.id')
            ->join('coordinates', 'coordinates.id_meta', '=', 'metadata.id')
            ->join('wind', 'wind.id_meta', '=', 'metadata.id')
            ->get();

        return response()->json($dataprimary);
    }

    public function getDataPrimaryByDate($dateSending)
    {
        $fechaConsulta = \Carbon\Carbon::createFromFormat('d-m-Y', $dateSending)->format('Y-m-d');
    
        $datosMeteorologicos = MetadataModel::select(
            'metadata.id',
            'main_data.temp_min',
            'main_data.temp_max',
            'main_data.temp',
            'metadata.timeQuery',
            'coordinates.lon',
            'coordinates.lat',
            'wind.speed',
            'wind.deg'
        )
            ->join('main_data', 'main_data.id_meta', '=', 'metadata.id')
            ->join('coordinates', 'coordinates.id_meta', '=', 'metadata.id')
            ->join('wind', 'wind.id_meta', '=', 'metadata.id')
            ->whereDate('metadata.timeQuery', $fechaConsulta)
            ->whereTime('metadata.timeQuery', '>=', '13:00:00') 
            ->whereTime('metadata.timeQuery', '<=', '13:15:00') 
            ->first(); 
    
        if ($datosMeteorologicos !== null) {
            return response()->json($datosMeteorologicos);
        } else {
            return response()->json(['error' => 'No se encontraron datos para la fecha y hora especificadas'], 404);
        }
    }
}