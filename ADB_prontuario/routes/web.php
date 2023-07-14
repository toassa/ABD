<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PacienteController;

Route::redirect('/', 'login');
Route::get('/login', [LoginController::class, 'login'])->name('admin.login');

Route::prefix('opcoes')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.opcoes');
});

Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('opcao.users');

    Route::get('/listar', [UserController::class, 'listar'])->name('users.listar');

    Route::prefix('/form')->group(function(){
        Route::get('/cadastrar', [UserController::class, 'cadastrar'])->name('users.cadastrar');

        Route::post('/salvar', [UserController::class, 'salvar'])->name('users.salvar');

        Route::get('/editar/{id}', [UserController::class, 'editar'])->name('users.editar');

        Route::put('/atualizar/{id}', [UserController::class, 'atualizar'])->name('users.atualizar');

        Route::get('/excluir/{id}', [UserController::class, 'excluir'])->name('users.excluir');
    });
});

Route::prefix('paciente')->group(function(){
    Route::get('/', [PacienteController::class, 'pesquisar'])->name('opcao.pacientes');
    
    Route::get('/index', [PacienteController::class, 'index'])->name('pacientes.index');

    Route::get('/listar', [PacienteController::class, 'listar'])->name('paciente.listar');

    Route::prefix('/form')->group(function(){
        Route::get('/cadastrar', [PacienteController::class, 'cadastrar'])->name('paciente.cadastrar');

        Route::post('/salvar', [PacienteController::class, 'salvar'])->name('paciente.salvar');

        Route::get('/editar/{id}', [PacienteController::class, 'editar'])->name('paciente.editar');

        Route::put('/atualizar/{id}', [PacienteController::class, 'atualizar'])->name('paciente.atualizar');

        Route::get('/excluir/{id}', [PacienteController::class, 'excluir'])->name('paciente.excluir');
    });
});
