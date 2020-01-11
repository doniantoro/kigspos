<?php

Route::resource('user', 'UserController')->except([
    'create', 'show'
]);

Route::put('/user/{id}/edit', 'UserController@update');