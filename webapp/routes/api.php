<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RemotePostController;

Route::middleware('api')->group(function () {
    Route::post('/remote-post', [RemotePostController::class, 'store']);
});
