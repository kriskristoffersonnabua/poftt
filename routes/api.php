<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::group(['prefix' => '/projects'], function () {
        Route::get('/', 'Api\Projects\ProjectsController@index');
        Route::get('/count', 'Api\Projects\ProjectsController@count');
        Route::post('/', 'Api\Projects\ProjectsController@store');
        Route::group(['prefix' => '/{id}'], function () {
            Route::get('/', 'Api\Projects\ProjectsController@show');
            Route::patch('/', 'Api\Projects\ProjectsController@update');
            Route::delete('/', 'Api\Projects\ProjectsController@destroy');
        });
    });

    Route::group(['prefix' => '/subprojects'], function () {
        Route::get('/', 'Api\Projects\SubProjectsController@index');
        Route::post('/', 'Api\Projects\SubProjectsController@store');
        Route::group(['prefix' => '/{id}'], function () {
            Route::get('/', 'Api\Projects\SubProjectsController@show');
            Route::patch('/', 'Api\Projects\SubProjectsController@update');
            Route::delete('/', 'Api\Projects\SubProjectsController@delete');
        });
    });

    Route::group(['prefix' => '/activity'], function () {
        Route::get('/', 'Api\Activity\ActivityController@index');
        Route::post('/', 'Api\Activity\ActivityController@store');
        Route::group(['prefix' => '/{id}'], function () {
            Route::get('/', 'Api\Activity\ActivityController@show');
            Route::patch('/', 'Api\Activity\ActivityController@update');
            Route::delete('/', 'Api\Activity\ActivityController@delete');

            Route::post('/add-tba', 'Api\Activity\ActivityTBASController@store');
            Route::get('/get-tba', 'Api\Activity\ActivityTBASController@index');

            Route::post('/add-comment', 'Api\Activity\ActivityCommentsController@store');
            Route::get('/get-comments', 'Api\Activity\ActivityCommentsController@index');
        });

        Route::delete('/remove-tba/{atba_id}', 'Api\Activity\ActivityTBASController@delete');
        Route::patch('/update-tba/{atba_id}', 'Api\Activity\ActivityTBASController@update');

        Route::delete('/remove-comment/{comment_id}', 'Api\Activity\ActivityCommentsController@delete');
        Route::patch('/update-comment/{comment_id}', 'Api\Activity\ActivityCommentsController@update');
    });

    Route::group(['prefix' => '/time-history'], function () {
        Route::get('/', 'API\Reports\TimeHistoryController@index');
        Route::get('/count', 'API\Reports\TimeHistoryController@count');
        Route::post('/', 'API\Reports\TimeHistoryController@store');
        Route::group(['prefix' => '/{id}'], function () {
            Route::get('/', 'API\Reports\TimeHistoryController@show');
            Route::patch('/', 'API\Reports\TimeHistoryController@update');
            Route::delete('/', 'API\Reports\TimeHistoryController@destroy');
        });
    });
});

Route::post('/login', 'Auth\ApiLoginController@login');
