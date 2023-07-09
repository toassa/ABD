<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Admin\UserController;

Route::redirect('/', 'login');
Route::get('/login', [LoginController::class, 'login'])->name('admin.login');

Route::prefix('opcoes')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.opcoes');
    Route::get('pacientes', [HomeController::class, 'opcoes_pacientes'])->name('opcao.pacientes');
});

Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('opcao.users');

    Route::get('/listar', [UserController::class, 'listar'])->name('users.listar');

    Route::prefix('/form')->group(function(){
        Route::get('/cadastrar', [UserController::class, 'cadastrar'])->name('user.cadastrar');

        Route::post('/salvar', [UserController::class, 'salvar'])->name('user.salvar');

        Route::get('/editar/{id}', [UserController::class, 'editar'])->name('user.editar');

        Route::get('/atualizar/{id}', [UserController::class, 'atualizar'])->name('user.atualizar');

        Route::get('/excluir/{id}', [UserController::class, 'excluir'])->name('user.excluir');
    });
});
