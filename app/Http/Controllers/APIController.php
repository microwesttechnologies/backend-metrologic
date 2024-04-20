<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metadata;

class APIController extends Controller
{
    public function getAllMetadata(Request $request)
    {
        $metadata = Metadata::all();

        return response()->json($metadata); 
    }

    public function getMetadataById(Request $request, $id)
    {
        $metadata = Metadata::find($id);

        if (!$metadata) {
            return response()->json(['error' => 'Metadata not found'], 404);
        }

        return response()->json($metadata);
    }
}
