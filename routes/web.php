<?php

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
Route::get('/page', 'PostulantController@create');
Route::post('page', 'PostulantController@store');

Route::get('/postulants', 'PostulantController@index');

Route::get('/emplois', 'OffreController@index');
Route::post('/emplois', 'PostulantController@store');

Route::get('/emp', 'OffreController@create');
Route::post('emp', 'OffreController@store');

Route::get('/postulant', 'PostulantController@liste');

Route::get('/index', 'PostulantController@liste1');



Route::get('/addjob', 'RecruteurController@create');
Route::post('addjob', 'RecruteurController@store');

Route::get('/acceuil', function () {
    return view('acceuil');
})->name('acceuil');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/S', function () {
    return view('Statistique');
});

Route::get('/myaccount', function () {
    return view('myaccount');
});


Route::get('/emploi', function () {
    return view('lesemplois');
});



    





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
