<?php

use App\Http\Controllers\CoordinatesController;
use App\Http\Controllers\DataPrimaryController;
use App\Http\Controllers\MainDataController;
use App\Http\Controllers\MetaDataController;
use App\Http\Controllers\WindController;

Route::get('/metadata',                         [MetaDataController         ::class, 'getAllMetadata']);
Route::get('/metadata/{id}',                    [MetaDataController         ::class, 'getMetadataById']);
Route::get('/maindata',                         [MainDataController         ::class, 'getAllMaindata']);
Route::get('/maindata/{id}',                    [MainDataController         ::class, 'getMainDataById']);
Route::get('/wind',                             [WindController             ::class, 'getAllWind']);
Route::get('/wind/{id}',                        [WindController             ::class, 'getWindById']);
Route::get('/coordinates',                      [CoordinatesController      ::class, 'getAllCoordinates']);
Route::get('/coordinates/{id}',                 [CoordinatesController      ::class, 'getCoordinateById']);
Route::get('/dataprimary',                      [DataPrimaryController      ::class, 'getAllDataPrimary']);
Route::get('/dataprimary/{id}',                 [DataPrimaryController      ::class, 'getDataPrimaryById']);
Route::get('/dataprimarybydate/{dateSending}',  [DataPrimaryController      ::class, 'getDataPrimaryByDate']);



