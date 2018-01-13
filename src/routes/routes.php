<?php

Route::group(['prefix' => 'task-profile'], function() {
    Route::get('demo', 'Bantenprov\TaskProfile\Http\Controllers\TaskProfileController@demo');
});
