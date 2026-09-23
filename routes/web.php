<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

route ::get('/', [HomeController::class, 'index']);
route ::get('/tentang', [HomeController::class, 'tentang']); 
route ::get('/kontak', [HomeController::class, 'kontak']);