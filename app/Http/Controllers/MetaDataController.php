<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MetadataModel;
use Illuminate\Http\Request;

class MetaDataController extends Controller
{
    public function getAllMetadata(Request $request)
    {
        $metadata = MetadataModel::all();

        return response()->json($metadata); 
    }
    public function getMetadataById(Request $request, $id)
    {
        $metadata = MetadataModel::find($id);

        if (!$metadata) {
            return response()->json(['error' => 'Metadata not found'], 404);
        }

        return response()->json($metadata);
    }
}
