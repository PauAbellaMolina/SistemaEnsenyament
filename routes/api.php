<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function() {
    //CRUD USUARIS
    Route::get('get-users', 'Api\UsersController@getUsers');
    Route::get('get-users/{id}', 'Api\UsersController@getUserId');
    Route::get('get-users/nom/{nom}', 'Api\UsersController@getUserNom');
    Route::get('get-users/email/{email}', 'Api\UsersController@getUserEmail');
    //New user
    Route::post('new-user', 'Api\UsersController@newUser');
    //Edit por id
    Route::post('edit-user/{id}', 'Api\UsersController@editUserId');
    //Delete user by id
    Route::delete('delete-user/{id}', 'Api\UsersController@deleteUserId');

    //CRUD Alumnes
    Route::get('get-alumnes', 'Api\AlumnesController@getAlumnes');
    Route::get('get-alumnes/{id}', 'Api\AlumnesController@getAlumnesId');
    Route::get('get-alumnes/nom/{nom}', 'Api\AlumnesController@getAlumnesNom');
    Route::get('get-alumnes/centre/{id}', 'Api\AlumnesController@getAlumnesCentreId');
    Route::get('get-alumnes/ensenyament/{id}', 'Api\AlumnesController@getAlumnesEnsenyamentId');
    //New Alumne
    Route::post('new-alumne', 'Api\AlumnesController@newAlumne');
    //Edit Alumne
    Route::post('edit-alumne/{id}', 'Api\AlumnesController@editAlumneId');
    //Delete alumne by id
    Route::delete('delete-alumne/{id}', 'Api\AlumnesController@deleteAlumneId');

    //CRUD Centres
    Route::get('get-centres', 'Api\CentresController@getCentres');
    Route::get('get-centres-alumnes/{id}', 'Api\CentresController@getCentresAlumnes');
    Route::get('get-centres/{id}', 'Api\CentresController@getCentresId');
    Route::get('get-centres/nom/{nom}', 'Api\CentresController@getCentresNom');
    Route::get('get-centres/poblacio/{nom}', 'Api\CentresController@getCentresPoblacio');
    //New Centre
    Route::post('new-centre', 'Api\CentresController@newCentre');
    //Edit Centre
    Route::post('edit-centre/{id}', 'Api\CentresController@editCentreId');
    //Delete centre by id
    Route::delete('delete-centre/{id}', 'Api\CentresController@deleteCentreId');

    //CRUD Ensenyaments
    Route::get('get-ensenyaments', 'Api\EnsenyamentsController@getEnsenyaments');
    Route::get('get-ensenyaments-alumnes/{id}', 'Api\EnsenyamentsController@getEnsenyamentsAlumnes');
    Route::get('get-ensenyaments/{id}', 'Api\EnsenyamentsController@getEnsenyamentsId');
    Route::get('get-ensenyaments/nom/{nom}', 'Api\EnsenyamentsController@getEnsenyamentsNom');
    //New Ensenyament
    Route::post('new-ensenyament', 'Api\EnsenyamentsController@newEnsenyament');
    //Edit Ensenyament
    Route::post('edit-ensenyament/{id}', 'Api\EnsenyamentsController@editEnsenyamentId');
    //Delete Ensenyament by id
    Route::delete('delete-ensenyament/{id}', 'Api\EnsenyamentsController@deleteEnsenyamentId');
});
