<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PessoaController;

Route::get('/login', [PessoaController::class, 'login']);
