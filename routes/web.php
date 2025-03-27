<?php

use App\Http\Controllers\ArtistController;
use App\Models\Artist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', [ArtistController::class, 'index']);
