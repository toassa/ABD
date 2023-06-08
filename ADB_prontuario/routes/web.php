<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PessoaController;

Route::get('/login', [PessoaController::class, 'login'])->name('admin.login');

Route::prefix('admin')->group(function () {
    Route::get('/opcoes', [PessoaController::class, 'opcoes'])->name('admin.opcoes');
});

