<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WindModel;
use Illuminate\Http\Request;


class WindController extends Controller
{
    public function getAllWind(Request $request)
    {
        $wind = WindModel::all();

        return response()->json($wind); 
    }

    public function getWindById(Request $request, $id)
    {
        $wind = WindModel::find($id);

        if (!$wind) {
            return response()->json(['error' => 'Metadata not found'], 404);
        }

        return response()->json($wind);
    }
}
