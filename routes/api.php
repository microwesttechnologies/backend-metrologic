<?php

use App\Http\Controllers\APIController;

Route::get('/metadata', [APIController::class, 'getAllMetadata']);
Route::get('/metadata/{id}', [APIController::class, 'getMetadataById']);


