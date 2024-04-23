<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CoordinatesModel;
use Illuminate\Http\Request;

class CoordinatesController extends Controller
{
    public function getAllCoordinates(Request $request)
    {
        $coordinates = CoordinatesModel::all();

        return response()->json($coordinates); 
    }

    public function getCoordinateById(Request $request, $id)
    {
        $coordinates = CoordinatesModel::find($id);

        if (!$coordinates) {
            return response()->json(['error' => 'Metadata not found'], 404);
        }

        return response()->json($coordinates);
    }}
