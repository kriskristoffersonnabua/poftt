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

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::group(['prefix' => '/projects'], function () {
        Route::get('/', 'API\Projects\ProjectsController@index');
        Route::get('/count', 'API\Projects\ProjectsController@count');
        Route::post('/', 'API\Projects\ProjectsController@store');
        Route::group(['prefix' => '/{id}'], function () {
            Route::get('/', 'API\Projects\ProjectsController@show');
            Route::patch('/', 'API\Projects\ProjectsController@update');
            Route::delete('/', 'API\Projects\ProjectsController@destroy');
        });
    });

    Route::group(['prefix' => '/subprojects'], function () {
        Route::post('/assign-employee', 'API\Employees\SubprojectEmployeesController@assignBatchEmployees');
        Route::post('/unassign-employee', 'API\Employees\SubprojectEmployeesController@unassignSubprojectEmployee');
        Route::get('/employees', 'API\Employees\SubprojectEmployeesController@index');
        Route::get('/employees/count', 'API\Employees\SubprojectEmployeesController@count');
        Route::group(['prefix' => '/employees/{id}'], function () {
            Route::get('/', 'API\Employees\SubprojectEmployeesController@show');
            Route::patch('/', 'API\Employees\SubprojectEmployeesController@update');
        });
    });
});

Route::post('/login', 'Auth\APILoginController@login');
