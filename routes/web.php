<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ClothnaapController;
use App\Http\Controllers\Frontend\TailersController;
use App\Http\Controllers\Frontend\MeasurmentController;
use App\Http\Controllers\Admin\ShowTablesController;
use App\Http\Controllers\Tailer\TailerAdminController;
use App\Http\Controllers\AddTailerController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\DisplayTailerController;
use App\Http\Controllers\TailerInfoController;
 
Route::get('/welcome', function () {
    return view('welcome');
});

// Menu stuff ////////////////////////////////////////////////////////////////
 
Route::get('/', [HomeController::class, 'index']);
// redirect to different pages
Route::get('/redirect', [RedirectController::class, 'redirect']);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cloth/{id}', [ClothnaapController::class, 'index']);

// display tailer in tailers shop
Route::get('/tailer', [TailersController::class, 'index']);


// contact add to database
Route::post('/uploadcontact', [ContactController::class, 'uploadcontact']);








 
//measurment form
Route::get('/measurment/{id}', [MeasurmentController::class, 'index'])->middleware('auth');


//  upload measurments
Route::post('/uploadnaap', [MeasurmentController::class, 'uploadnaap']);



// show All measurments in table in addmin panel
Route::get('/showMeasurment', [ShowTablesController::class, 'showMeasurment']);

// Delete measurment
Route::get('/deletemeasurment/{id}', [ShowTablesController::class, 'deletemeasurment']);

// Update measurment
Route::get('/updatemeasurment/{id}', [ShowTablesController::class, 'updatemeasurment']);

// uploadd update measurment
Route::post('/uploadUpdateMeasurment/{id}', [ShowTablesController::class, 'uploadUpdateMeasurment']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// user middleware         ////////////////////////////////////////////////////////////////////////////////////
Route::middleware(['auth', 'role:user'])->group(function () {
// user profile
Route::get('/userprofile', [TailerAdminController::class, 'userprofile']);
});

// tailer middlerware       ///////////////////////////////////////////////////////////////////////////////////
Route::middleware(['auth', 'role:tailer'])->group(function () {

// tailer profile
Route::get('/myprofile', [TailerAdminController::class, 'myprofile']);

//single tailer detaile info
Route::get('/singletailerinfo', [TailerAdminController::class, 'singletailerinfo']);

// total measurmrnt for tailer []
Route::get('/totalmeasurmentrecord', [TailerAdminController::class, 'totalmeasurmentrecord']);

// Tailer Admin panel
Route::get('/tailerhome', [TailerAdminController::class, 'index']);

// tailer form for hidding  and show one time
Route::get('/hidetailerinfo',[TailerAdminController::class, 'hidetailerinfo']);

// add tailer data for tailer addmin
Route::get('/addtailerfortailer',[TailerAdminController::class, 'addtailerfortailer']);

// add tailer info data for tailer addmin
Route::get('/tailerdetailinfo',[TailerAdminController::class, 'tailerdetailinfo']);

});

// admin middleware        /////////////////////////////////////////////////////////////////////////////////////////

Route::middleware(['auth', 'role:admin'])->group(function () {
    // show All messages in table in addmin panel
Route::get('/showMessage', [ShowTablesController::class, 'showMessage']);

// show tailers  table in admin panel with edit / delelt field
Route::get('/showTailers', [ShowTablesController::class, 'showTailers']);

});

// admin/tailer middleware       /////////////////////////////////////////////////////////////////////////////////////

Route::middleware(['auth', 'role:admin|tailer'])->group(function () {
    Route::get('/addtailer', [AddTailerController::class, 'index']);

    // show All tailer detail info in table in addmin panel
Route::get('/showTailersInfo', [ShowTablesController::class, 'showTailersInfo']);

// tailer info showing form
Route::get('/tailerinfo', [TailerInfoController::class, 'index']);

// Delete Tailer Info
Route::get('/deletetailerinfo/{id}', [ShowTablesController::class, 'deletetailerinfo']);


// Update Tailer Info
Route::get('/updateTailerInfo/{id}', [ShowTablesController::class, 'updateTailerInfo']);

// uploadd update tailer info
Route::post('/uploadUpdateTailerInfo/{id}', [ShowTablesController::class, 'uploadUpdateTailerInfo']);

//adding tailer info in form
Route::post('/uploadtinfo', [TailerInfoController::class, 'uploadtinfo']);

// uplaod data 
Route::post('/uploadtailer', [AddTailerController::class, 'uploadtailer']);


// Delete Tailer
Route::get('/deletetailer/{id}', [ShowTablesController::class, 'deletetailer']);

// Update Tailer
Route::get('/updatetailer/{id}', [ShowTablesController::class, 'updatetailer']);

// upload Update Tailer
Route::post('/uploadupdatetailer/{id}', [ShowTablesController::class, 'uploadupdatetailer']);

});
