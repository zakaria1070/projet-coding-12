<?php

use App\Accueil;
use App\Service;
use App\Testimonial;
use App\Work;
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
    $works = Work::all();
    $testimonials = DB::table('testimonials')->paginate(1)->fragment('testimonial');
    // $services = Service::all();
    return view('index',['data' => $services,$testimonials], compact('accueils','services','works','testimonials'));
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
Route::get('/work', 'WorkController@index')->name('work');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');

// create
Route::get('/accueil/create','AccueilController@create');
Route::get('/service/create','ServiceController@create');
Route::get('/work/create','WorkController@create');
Route::get('/testimonial/create','TestimonialController@create');

// store
Route::post('/accueil/store','AccueilController@store');
Route::post('/service/store','ServiceController@store');
Route::post('/work/store','WorkController@store');
Route::post('/testimonial/store','TestimonialController@store');

// edit
Route::get('/accueil/{id}/edit','AccueilController@edit');
Route::get('/service/{id}/edit','ServiceController@edit');
Route::get('/work/{id}/edit','WorkController@edit');
Route::get('/testimonial/{id}/edit','TestimonialController@edit');

// uptdate
Route::post('/accueil/{id}/update','AccueilController@update');
Route::post('/service/{id}/update','ServiceController@update');
Route::post('/work/{id}/update','WorkController@update');
Route::post('/testimonial/{id}/update','TestimonialController@update');

// delete
Route::get('/accueil/{id}/destroy','AccueilController@destroy');
Route::get('/service/{id}/destroy','ServiceController@destroy');
Route::get('/work/{id}/destroy','WorkController@destroy');
Route::get('/testimonial/{id}/destroy','TestimonialController@destroy');
