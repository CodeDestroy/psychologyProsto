<?php

use Illuminate\Support\Facades\Route;



/* Route::get('/home', function () {
    return view('home');

}); */

Auth::routes();
Route::get('/', function () {
    return view('home');
});/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
/* Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/security', [App\Http\Controllers\ProfileController::class, 'security'])->name('security')
 */
Route::controller(App\Http\Controllers\ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile.general');
    Route::get('/profile/security', 'security')->name('profile.security');
});  


Route::controller(App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/contacts', 'contacts')->name('contacts');
    Route::get('/about', 'about')->name('about');
}); 