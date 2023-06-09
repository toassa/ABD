<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PessoaController;

Route::redirect('/', 'login');

Route::get('/login', [PessoaController::class, 'login'])->name('admin.login');

Route::prefix('opcoes')->group(function () {
    Route::get('/', [PessoaController::class, 'opcoes'])->name('admin.opcoes');
    Route::get('pacientes', [PessoaController::class, 'opcao_pacientes'])->name('opcao.pacientes');
    Route::get('pessoas', [PessoaController::class, 'opcao_pessoas'])->name('opcao.pessoas');
});

