<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Event;

/* Route::get('/home', function () {
    return view('home');

}); */

Auth::routes();
Route::get('/', function () {
    return view('home');
});
Route::controller(App\Http\Controllers\ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile.general');
    Route::get('/profile/security', 'security')->name('profile.security');
    
    Route::get('/profile/education', 'education')->name('profile.education');
    Route::post('/profile/general/setWhatsApp', 'setWhatsApp')->name('profile.general.setWhatsApp');
    Route::post('/profile/general/setTgNickname', 'setTgNickname')->name('profile.general.setTgNickname');
    Route::post('/profile/general/setEmail', 'setEmail')->name('profile.general.setEmail');
    Route::post('/profile/general/setName', 'setName')->name('profile.general.setName');
    Route::post('/profile/general/setSecondName', 'setSecondName')->name('profile.general.setSecondName');
    Route::post('/profile/general/setPatronymicName', 'setPatronymicName')->name('profile.general.setPatronymicName');
    Route::post('/profile/general/setPhone', 'setPhone')->name('profile.general.setPhone');
    
});  


Route::controller(App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contacts', 'contacts')->name('contacts');
    Route::get('/about', 'about')->name('about');
}); 

Route::get('/api/events', function (Request $request) {
    $date = $request->query('date');
    return Event::where('start_date', '=', $date)
                ->orderBy('start_time')
                ->get();
});