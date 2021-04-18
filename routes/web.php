<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LocalizationController;



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
    return view('welcome');
})->name('welcome');
Route::get('index', function(){
    return view('project/index');
})->name('index');

Route::get('/home', function () {
    return view('cv/home');    
})->name('home');

Route::get('/skills', function () {
    return view('cv/skills');    
})->name('skills');

Route::get('/contact', function () {
    return view('cv/contact');    
})->name('contact');

Route::get('/{lang}', [LocalizationController::class,'index']);

Route::get('mails/send', 'App\Http\Controllers\MailController@sending')->name('sending');

//Route::get('mails/send',[MailController::class, 'sending'])->name('sending');
Route::post('question',[QuestionController::class, 'index'])->name('question');
