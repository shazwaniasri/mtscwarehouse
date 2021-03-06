<?php

use Illuminate\Http\Request;
use App\Trigger;

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

Route::get('trigger', function() {
    $trigger = Trigger::get('value')->first();
    return $trigger;
});

Route::get('update/{id}', 'TriggerController@triggerUpdate');

Route::get('updateon/{id}', 'TriggerController@triggerUpdateOn');

Route::get('dmaddreturns/get_tag', 'DashboardController@getStatus');

Route::get('dmform/getdeduct', 'DashboardController@getDeduct');

Route::get('/search_dmform', 'DashboardController@searchDmform');

Route::get('/search_addreturn', 'DashboardController@searchAddreturn');
