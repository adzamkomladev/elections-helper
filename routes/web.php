<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return hybridly('welcome');
});

Route::get('/elections', fn () => hybridly('elections.index'));
