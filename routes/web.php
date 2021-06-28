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
    return view('welcome');
});

Route::get("/login","LoginController@login")->name("login");
Route::post("/login","LoginController@checkLogin");
Route::get("/logout","LoginController@logout");

Route::get("/homepage_no_session","HomepageNoSessionController@home");

Route::get("/signup","RegisterController@register");
Route::post("/signup","RegisterController@create");
Route::get("signup/username/{query}","RegisterController@checkUsername");

Route::get("/home","HomeController@home")->name("home");
Route::post("home/invia_dati","HomeController@invia_dati")->name("newEvent");
Route::get("home/conteggio_istanze","HomeController@conteggio");
Route::get("/home/contenuti","HomeController@ContenutiHome");
Route::get("home/favourite/{t}","HomeController@Favourite");
Route::get("home/header","HomeController@Header");
Route::get("home/rimuovipreferiti/{t}","HomeController@RimuoviPreferiti");
Route::get("home/estraipreferiti","HomeController@EstraiPreferiti");

Route::get("/eventi_internazionali","EventiController@index");
Route::get("eventi_internazionali/search/{query}","EventiController@search");
Route::post("eventi_internazionali/carrello", "EventiController@carrello");
Route::get("eventi_internazionali/estrai_carrello","EventiController@estrai");
Route::post("eventi_internazionali/update_quantita","EventiController@aggiorna_quantita");
Route::post("eventi_internazionali/rimuovi_dal_carrello","EventiController@rimuovi_dal_carrello");


Route::get("/concerti","ConcertiController@concerti");
Route::get("concerti/search/{query}","ConcertiController@search");

Route::get("/crea_eventi","CreateEventController@crea_eventi");
