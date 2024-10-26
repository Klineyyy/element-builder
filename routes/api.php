<?php

use App\Models\RegionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/regions', function () {
    $regions = RegionModel::get();
    return response()->json($regions);
});