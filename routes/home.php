<?php


use App\Http\Controllers\home\HomeController;



Route::get('/home', [HomeController::class, 'home']);


?>