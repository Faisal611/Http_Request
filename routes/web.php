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

/*
|-----User data Create
 */
Route::get('user_create','StudentController@userCreate');

/*
|-----User data All show
 */
Route::get('all_data_show','StudentController@allDataShow');

/*
|-------- Test Middleware -----------------------
*/



Route::group(['middleware'=>'test'] ,function(){
    Route::get('one','StudentController@one');
    Route::get('two','StudentController@two');
    Route::get('there','StudentController@there');
});





/*
|-------- Test Middleware End -----------------------|
*/

/*
|-------- Register Create -----------------------|
*/
Route::get('register_create','RegisterController@registerCreate');
Route::post('users','RegisterController@store');

/*
|-------- Session Create -----------------------|
*/
Route::get('session_create','SessionController@createUser');
Route::get('session_show','SessionController@showUser');
