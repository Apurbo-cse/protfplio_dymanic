<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\EducationController;




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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');


Route::group(['prefix' => 'dashboard/', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::resource('home', HomeController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('education', EducationController::class);

});
