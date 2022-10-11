<?php

use Illuminate\Http\Request;


Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1'], function () {
    Route::get('/verify-entrant/{symbol_no}','FormApiController@verifyEntrant')->name('verifyEntrant');
});