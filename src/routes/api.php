<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['api']], function(){
  Route::resource('projects', 'Api\ProjectController');
  Route::get('all', 'Api\ProjectController@all');
  Route::get('find/{id}', 'Api\ProjectController@find');
  Route::get('where/{name}', 'Api\ProjectController@where');
});
