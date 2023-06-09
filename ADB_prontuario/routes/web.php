<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PessoaController;

Route::redirect('/', 'login');

Route::get('/login', [PessoaController::class, 'login'])->name('admin.login');

Route::prefix('opcoes')->group(function () {
    Route::get('/', [PessoaController::class, 'opcoes'])->name('admin.opcoes');
    Route::get('pessoa', [PessoaController::class, 'opcao_pessoa'])->name('opcao.pessoa');
});

