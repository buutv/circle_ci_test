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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* start CRUD ticket */
Route::get('/create/ticket','TicketController@create');
Route::post('/create/ticket','TicketController@store');
Route::get('/tickets', 'TicketController@index');
Route::get('/edit/ticket/{id}','TicketController@edit');
Route::post('/edit/ticket/{id}','TicketController@update');
Route::patch('/edit/ticket/{id}','TicketController@update');
Route::delete('/delete/ticket/{id}','TicketController@destroy');
/* end CRUD ticket */

/* start send mail */
Route::get('/email', 'MailController@showEmailForm');
Route::post('/email', 'MailController@sendEmail');
/* end send mail */

Route::group(['prefix' => 'laravel-crud-search-sort-ajax-modal-form'], function () {
    Route::get('/', 'Crud5Controller@index');
    Route::match(['get', 'post'], 'create', 'Crud5Controller@create');
    Route::match(['get', 'put'], 'update/{id}', 'Crud5Controller@update');
    Route::delete('delete/{id}', 'Crud5Controller@delete');
});
