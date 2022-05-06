<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use app\Models\table_user_curd;
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

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/view', [RegistrationController::class, 'view']);

Route::get('/register/delete/{id}', [RegistrationController::class, 'delete']);

Route::get('/register/update/{id}', [RegistrationController::class, 'edit']);



 /*Route::get('/user', function () {
    $curd = Table_user_curd::all();
    echo "<pre>";
    print_r($curd);
});
*/