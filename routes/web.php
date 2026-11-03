<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $path = public_path('index.html');

    if (File::exists($path)) {
        return response()->file($path);
    }

    abort(404, 'index.html not found in public folder');
});