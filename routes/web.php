<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front-end.login');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);    
});
Route::get('/user-permissions/{id}', [App\Http\Controllers\UserController::class, 'permissions'])->name('user-permissions');
Route::patch('/sync-permissions/{id}', [App\Http\Controllers\UserController::class, 'syncpermissions'])->name('sync-permissions');
Route::resource('types', App\Http\Controllers\TypeController::class);
Route::resource('rooms', App\Http\Controllers\RoomController::class);
Route::resource('bookings', App\Http\Controllers\BookingController::class);
Route::resource('amenities', App\Http\Controllers\AmenityController::class);
Route::resource('reservations', App\Http\Controllers\ReservationController::class);
Route::resource('transfers', App\Http\Controllers\TransferController::class);
Route::resource('details', App\Http\Controllers\DetailController::class); 
Route::get('/findroom', [App\Http\Controllers\FindRoomController::class, 'index'])->name('findroom');
Route::post('/findrooms', [App\Http\Controllers\FindRoomController::class, 'findroom'])->name('findrooms');
Route::get('/book/{id}', [App\Http\Controllers\FindRoomController::class, 'book'])->name('book');

// Webpage routes

Route::get('/index-homepage', function () {
    return view('front-end.index-homepage');
});
Route::get('/about', function () {
    return view('front-end.about');
});
Route::get('/contact', function () {
    return view('front-end.contact');
});
Route::get('/gallery', function () {
    return view('front-end.gallery');
});
Route::get('/single', function () {
    return view('front-end.rooms.single');
});
Route::get('/double', function () {
    return view('front-end.rooms.double');
});
Route::get('/quad', function () {
    return view('front-end.rooms.quad');
});
Route::get('/basement2in2', function () {
    return view('front-end.rooms.basement2in2');
});
Route::get('/basementdouble', function () {
    return view('front-end.rooms.basementdouble');
});
Route::get('/basementquad', function () {
    return view('front-end.rooms.basementquad');
});