<?php

use Illuminate\Support\Facades\Route;


Route::get('/user/{name}', function ($name) {
    return 'Yuma Akhunza Kausar P '.$name;
});
