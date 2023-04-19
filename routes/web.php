<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('app'); });
Route::get('/home', function () { return view('layouts.home'); });

Route::get('events', [EventsController::class, 'index'])->name('events');
Route::get('events/create',[EventsController::class, 'create']);
Route::post('events', [EventsController::class, 'store']);
Route::get('events/{id?}', [EventsController::class, 'show']);
Route::get('events/{id?}/register', [EventsController::class, 'register']);
Route::post('events/{id?}/attendees', [EventsController::class, 'storeAttendee']);
Route::get('events/{id?}/edit', [EventsController::class, 'edit']);
Route::put('events/{id?}', [EventsController::class, 'update']);

Route::fallback(function () {
    return view('layouts.response',[
        'msg' => 'The site your trying to access is not available',
        'status' => 404
    ]);
});

/**
 * Route implementation for register, login and logout and others...
 */
Auth::routes();

