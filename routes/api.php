<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Digitalcloud\MultilingualNova\Http\Controllers\LanguageCurrentController;
use Digitalcloud\MultilingualNova\Http\Controllers\LanguageDeleteController;
/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

// Route::get('/', function (Request $request) {
//     //
// });
Route::get('current-local', LanguageCurrentController::class);
Route::delete('remove-local/{locale}', LanguageDeleteController::class);