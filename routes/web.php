<?php

use Rusly\HelloWorld\Http\Controllers\HelloWorldController;

Route::get('/hello-world', [HelloWorldController::class, 'index']);
