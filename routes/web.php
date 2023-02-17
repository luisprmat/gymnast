<?php

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

Route::view('/', 'welcome')->name('home');
Route::view('about', 'about')->name('about');
Route::view('feature', 'feature')->name('feature');
Route::view('class', 'class')->name('class');
Route::view('contact', 'contact')->name('contact');

Route::get('localization', function () {
    $lang = request()->lang;

    session()->put('lang', $lang);

    return back();
})->name('localization');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
