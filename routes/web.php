<?php

use App\Http\Controllers\PemainController;

Route::get('/pemain', [PemainController::class, 'index']);

