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


Route::group(['middleware' => 'auth'], function () {
    Route::get('/migrate', 'HomeController@migrate')->name('migrate');
    Route::post('/contactadd','ContactController@store')->name('store.contact');
    Route::get('/contactshow', 'ContactController@index')->name('show.contact');
    Route::get('/catmeniu', 'CategorieMeniuController@index')->name('categorie.meniu');
    Route::get('/addcat', 'CategorieMeniuController@create')->name('addcat');

    Route::post('/categorie/store', 'CategorieMeniuController@store')->name('add.store');
    Route::get('/categorie/update/{id}', 'CategorieMeniuController@update')->name('catmeniu.update');
    Route::get('/categorie/edit/{id}', 'CategorieMeniuController@edit')->name('catmeniu.edit');
    Route::get('/categorie/destroy/{id}', 'CategorieMeniuController@destroy')->name('catmeniu.destroy');

    Route::get('/meniu/index', 'MeniuController@index')->name('meniu.index');
    Route::get('/meniu/add', 'MeniuController@create')->name('meniu.add');
    Route::post('/meniu/store', 'MeniuController@store')->name('meniuadd.store');
    Route::get('/meniu/show', 'MeniuController@show')->name('meniu.show');
    Route::get('/meniu/edit/{id}', 'MeniuController@edit')->name('meniu.edit');
    Route::get('/meniu/update/{id}', 'MeniuController@update')->name('meniu.update');
    Route::get('/meniu/destroy/{id}', 'MeniuController@destroy')->name('meniu.destroy');

    Route::get('testimoniale/index', 'TestimonialController@index')->name('testiimoniale.index');
    Route::get('testimoniale/edit/{id}', 'TestimonialController@edit')->name('testiimoniale.edit');
    Route::post('testimoniale/update/{id}', 'TestimonialController@update')->name('testiimoniale.update');
    Route::get('testimoniale/delete/{id}', 'TestimonialController@destroy')->name('testiimoniale.destroy');
    Route::get('testimoniale/show/{id}', 'TestimonialController@show')->name('termi');
    Route::post('testimoniale/index', 'TestimonialController@store');
    Route::get('testimoniale/add', 'TestimonialController@add')->name('testiimoniale.add');
    Route::get('/home', 'HomeController@index')->name('home');
   
    Route::post('contact/add', 'ContactController@store')->name('contact.store');

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('form/index', 'FormController@index')->name('form.index');
    Route::get('form/edit/{id}', 'FormController@edit')->name('form.edit');
    Route::post('form/update/{id}', 'FormController@update')->name('form.update');
    Route::get('form/delete/{id}', 'FormController@destroy')->name('form.destroy');
    Route::get('form/add', 'FormController@add')->name('form.add');
    Route::post('form/store', 'FormController@store')->name('form.store');
    Route::get('form/show/{id}', 'FormController@show')->name('form.show');
});
Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome');



//Route::resource('testimoniale','TestimonialController');



