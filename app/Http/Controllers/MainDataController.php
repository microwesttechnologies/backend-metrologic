<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MainDataModel;
use Illuminate\Http\Request;

class MainDataController extends Controller
{
    
    public function getAllMaindata(Request $request)
    {
        $maindata = MainDataModel::all();

        return response()->json($maindata); 
    }

    public function getMainDataById(Request $request, $id)
    {
        $maindata = MainDataModel::find($id);

        if (!$maindata) {
            return response()->json(['error' => 'Metadata not found'], 404);
        }

        return response()->json($maindata);
    }
}
