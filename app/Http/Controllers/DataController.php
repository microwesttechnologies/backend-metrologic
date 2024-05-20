<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getData($lat, $lon)
    {
        try {
            $latestMetadataId = DB::table('metadata')
                ->join('coordinates', 'metadata.id', '=', 'coordinates.id_meta')
                ->where('coordinates.lat', $lat)
                ->where('coordinates.lon', $lon)
                ->orderBy('metadata.timeQuery', 'desc')
                ->value('metadata.id');

            if ($latestMetadataId) {
                $result = DB::table('metadata')
                    ->join('main_data', 'main_data.id_meta', '=', 'metadata.id')
                    ->join('wind', 'metadata.id', '=', 'wind.id_meta')
                    ->select('main_data.temp', 'main_data.temp_max', 'metadata.timeQuery', 'wind.speed', 'wind.deg')
                    ->where('metadata.id', $latestMetadataId)
                    ->first();

                return response()->json($result);
            } else {
                return response()->json(['error' => 'No data found for the given coordinates.'], 404);
            }

        } catch (\Exception $e) {
            return response()->json(['error' => 'Database query error: ' . $e->getMessage()], 500);
        }
    }
}
