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

/*Route::get("/","CategoriesController@index"() {
    return view('welcome');
});*/

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

Route::get('/nom_cour','CourController@index')->name('nom_cour.index');
Route::get('nom_cour/create','CourController@create');
Route::post('nom_cour/create','CourController@store')->name("ajouter_nom_cour");
Route::get('nom_cour/{id}/edit','CourController@edit')->name("editer_cour");
Route::patch('nom_cour/{id}/edit', 'CourController@update')->name('update_cour');
Route::get('/cours','CourController@index')->name('cours');
Route::get('/cours/create','CourController@create')->name('cour_create');
Route::post('/cours/create','CourController@store')->name('store_cours');
Route::get('/cours/create', 'CourController@create')->name('create_cour')->middleware('auth');
Route::delete('/cours/destroy/{id}','CourController@destroy')->name('cours_destroy');
Route::get('cour_reseaux','CourController@index_welcome')->name('cours.index_welcome');
Route::get('/abonnement/expired', "AbonnementController@expired");
Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::get('/admin/dashboard', "CourController@index");
//Route::get('/seller', "CourController@index");

Route::get("/","HomeController@index");
Route::get("/", function () {
   return view('index');
});
//Route::get("/cour_reseaux", function () {
  //return view('layout.welcome');
//});
Route::get("/cour_developp", function () {
  return view('layout.developp');
});
Route::get("/contact", function () {
  return view('layouts.contact');
});
Route::get('/professeurs','CourController@liste_prof')->name('liste_professeur');
Route::get("cours/{id}/show", 'CourController@show');
//Route::post('/inscription', function () {
  //return 'Votre email est ' . $_POST['email'];
//});
//Route::post('/inscription', function () {
  //return 'Votre email est ' . request('email');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

