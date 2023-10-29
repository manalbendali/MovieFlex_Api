<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/* start user Routes */

Route::post('users',[UserController::class, 'store']);

/* end user Routes */
/*start film Routes*/

Route::get('filmDay/{day}', [FilmController::class, 'show']);

/*end film Routes*/
