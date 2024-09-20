<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Application\PagesController;
use App\Http\Controllers\Application\FormController;


Route::controller(PagesController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/best','best')->name('best');
    Route::get('/horrors','horrors')->name('horrors');
    Route::get('/fighters','fighters')->name('fighters');
    Route::get('/comedies','comedies')->name('comedies');
    Route::get('/fantastica','fantastica')->name('fantastica');
    Route::get('/thriller','thriller')->name('thriller');
    Route::get('/drama','drama')->name('drama');
    Route::get('/adventures','adventures')->name('adventures');
    Route::get('/crime','crime')->name('crime');
    Route::get('/fantasy','fantasy')->name('fantasy');
    Route::get('/military','military')->name('military');
    Route::get('/movie/{id}','showMovie')->name('movieID');
    Route::get('/login','login')->name('login');
    Route::get('/register','register')->name('register');
    Route::get('/addmovie','addmovie')->name('addmovie');
});
Route::controller(FormController::class)->group(function(){
    Route::post('/register','registerCheck')->name('register-check');
    Route::post('/loginCheck','loginCheck')->name('loginCheck');
    Route::post('/logout','logout')->name('logout');
    Route::post('/addmovieCheck','addmovieCheck')->name('addmovieCheck');
    Route::post('/rating','rating')->name('rating');
});

// Route::get('/movies/{movie}', function ($movie, Request $request) {
//     $movies = [
//         [
//             'id'=>1,
//             'name'=>'Матрица',
//             'description'=>'Жизнь Томаса Андерсона разделена на две части:',
//             'preview'=>'https://kinopoiskapiunofficial.tech/images/posters/kp/301.jpg',
//             'rating'=>8.7

//         ]];
//     return view('pages.movie',['movie'=>$movie]);
// })->name('movie');



