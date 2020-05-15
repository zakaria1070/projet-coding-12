<?php

use App\Accueil;
use App\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    // pagination
    $services = DB::table('services')->paginate(3)->fragment('service');
    $accueils = Accueil::all();
    // $services = Service::all();
    return view('index',['data' => $services], compact('accueils','services'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//  back

Route::get('/accueil', 'AccueilController@index')->name('accueil');
Route::get('/service', 'ServiceController@index')->name('service');

// create
Route::get('/accueil/create','AccueilController@create');
Route::get('/service/create','ServiceController@create');

// store
Route::post('/accueil/store','AccueilController@store');
Route::post('/service/store','ServiceController@store');

// edit
Route::get('/accueil/{id}/edit','AccueilController@edit');
Route::get('/service/{id}/edit','ServiceController@edit');

// uptdate
Route::post('/accueil/{id}/update','AccueilController@update');
Route::post('/service/{id}/update','ServiceController@update');

// delete
Route::get('/accueil/{id}/destroy','AccueilController@destroy');
Route::get('/service/{id}/destroy','ServiceController@destroy');
