<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\BlogController;


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

Route::get('/', [IndexController::class, "index"]);
Route::get('/blog/{slug}', [IndexController::class, "index"]);

Route::post("/send/message", [SendEmailController::class, "sendEmail"]);

Route::get('/time-lapse/{slug}/lang/{lang}', [BlogController::class, "show"]);
Route::get('time-lapse-all/{lang}', function($lang){

    if($lang){
        if (! in_array($lang, ['en', 'es'])) {
            abort(400);
        }

        \App::setLocale($lang);
    }

    return view("timeLapse");

});