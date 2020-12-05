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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* USUARIS */
//Gets
Route::get('/usuaris', 'Front\UsuarisController@index')->name('usuaris');
Route::post('/usuaris/id', 'Front\UsuarisController@usuarisId')->name('usuaris/id');
Route::post('/usuaris/nom', 'Front\UsuarisController@usuarisNom')->name('usuaris/nom');
Route::post('/usuaris/email', 'Front\UsuarisController@usuarisEmail')->name('usuaris/email');
//Details page
Route::get('/usuaris/details/{id_user}', 'Front\UsuarisController@detailsUsuari')->name('usuaris/details');
//New user
Route::get('/usuaris/nou', 'Front\UsuarisController@nouUsuari')->name('usuaris/nou');
Route::post('/usuaris/nou/post', 'Front\UsuarisController@nouUsuariPost')->name('usuaris/nou/post');
//Edit
Route::get('/usuaris/edit/{id_user}', 'Front\UsuarisController@editUsuari')->name('usuaris/edit');
Route::post('/usuaris/edit/post/{id_user}', 'Front\UsuarisController@editUsuariPost')->name('usuaris/edit/post');
//Delete
Route::get('/usuaris/delete/{id_user}', 'Front\UsuarisController@deleteUsuari');

/* ALUMNES */
//Gets
Route::get('/alumnes', 'Front\AlumnesController@index')->name('alumnes');
Route::post('/alumnes/id', 'Front\AlumnesController@alumnesId')->name('alumnes/id');
Route::post('/alumnes/nom', 'Front\AlumnesController@alumnesNom')->name('alumnes/nom');
Route::post('/alumnes/centre', 'Front\AlumnesController@alumnesCentre')->name('alumnes/centre');
Route::post('/alumnes/ensenyament', 'Front\AlumnesController@alumnesEnsenyament')->name('alumnes/ensenyament');
//Details page
Route::get('/alumnes/details/{id_alumne}', 'Front\AlumnesController@detailsAlumne')->name('alumnes/details');
//New alumne
Route::get('/alumnes/nou', 'Front\AlumnesController@nouAlumne')->name('alumnes/nou');
Route::post('/alumnes/nou/post', 'Front\AlumnesController@nouAlumnePost')->name('alumnes/nou/post');
//Edit
Route::get('/alumnes/edit/{id_alumne}', 'Front\AlumnesController@editAlumne')->name('alumnes/edit');
Route::post('/alumnes/edit/post/{id_alumne}', 'Front\AlumnesController@editAlumnePost')->name('alumnes/edit/post');
//Delete
Route::get('/alumnes/delete/{id_alumne}', 'Front\AlumnesController@deleteAlumne');

/* CENTRES */
//Gets
Route::get('/centres', 'Front\CentresController@index')->name('centres');
Route::post('/centres/id', 'Front\CentresController@centresId')->name('centres/id');
Route::post('/centres/nom', 'Front\CentresController@centresNom')->name('centres/nom');
Route::post('/centres/poblacio', 'Front\CentresController@centresPoblacio')->name('centres/poblacio');
//Details page
Route::get('/centres/details/{id_centre}', 'Front\CentresController@detailsCentre')->name('centres/details');
//New alumne
Route::get('/centres/nou', 'Front\CentresController@nouCentre')->name('centres/nou');
Route::post('/centres/nou/post', 'Front\CentresController@nouCentrePost')->name('centres/nou/post');
//Edit
Route::get('/centres/edit/{id_centre}', 'Front\CentresController@editCentre')->name('centres/edit');
Route::post('/centres/edit/post/{id_centre}', 'Front\CentresController@editCentrePost')->name('centres/edit/post');
//Delete
Route::get('/centres/delete/{id_centre}', 'Front\CentresController@deleteCentre');
