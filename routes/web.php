<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

//Route::get('/home', function () {
//    return view('home');
//});

Route::get('/expressions-dance-theatre-our-story', function () {
    return view('expressions-dance-theatre-our-story');
});

Route::get('/meet-our-faculty', function () {
    return view('meet-our-faculty');
});

Route::get('/certifications-and-recognition', function () {
    return view('certifications-and-recognition');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/recreational', function () {
    return view('recreational');
});

Route::get('/musical-theater', function () {
    return view('musical-theater');
});

Route::get('/remarkable-movement', function () {
    return view('remarkable-movement');
});

Route::get('/track', function () {
    return view('track');
});

Route::get('/competitive-dance', function () {
    return view('competitive-dance');
});

//Route::get('/tuition-and-fees', function () {
//    return view('tuition-and-fees');
//});

Route::get('/dress-code', function () {
    return view('dress-code');
});

Route::get('/news', function () {
    return view('news');
});

//previously mini-sessions
Route::get('/musical-theater-camps', function () {
    return view('musical-theater-camps');
});

Route::get('/mini-sessions', function () {
    return view('mini-sessions');
});

Route::get('/fall', function () {
    return view('fall');
});
//Route::get('/summer', function () {
//    return view('summer');
//});

//Route::get('/spring', function () {
//    return view('spring');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');
