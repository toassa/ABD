<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PacienteController;

Route::redirect('/', 'login');

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('admin.login');
    
    Route::get('/sair', [LoginController::class, 'sair'])->name('login.sair');
    
    Route::post('/entrar', [LoginController::class, 'entrar'])->name('login.entrar');
});


Route::group(['middleware' => 'auth'], function(){
    Route::prefix('opcoes')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin.opcoes');
    });
});
    
Route::group(['middleware' => 'auth'], function(){
    Route::prefix('user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('opcao.users');
    
        Route::get('/listar', [UserController::class, 'listar'])->name('users.listar');

        // /{name}
        Route::get('/buscar', [UserController::class, 'buscar'])->name('users.buscar');
    
        Route::prefix('/form')->group(function(){
            Route::get('/cadastrar', [UserController::class, 'cadastrar'])->name('users.cadastrar');
    
            Route::post('/salvar', [UserController::class, 'salvar'])->name('users.salvar');
    
            Route::get('/list-editar', [UserController::class, 'list_editar'])->name('user.list-editar');

            Route::get('/editar/{num_USP}', [UserController::class, 'editar'])->name('users.editar');
    
            Route::put('/atualizar/{num_USP}', [UserController::class, 'atualizar'])->name('users.atualizar');
    
            Route::get('/list-excluir', [UserController::class, 'list_excluir'])->name('users.list-excluir');

            Route::get('/excluir/{num_USP}', [UserController::class, 'excluir'])->name('users.excluir');
        });
    });
});

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('paciente')->group(function(){
        Route::get('/', [PacienteController::class, 'pesquisar'])->name('opcao.pacientes');
        
        Route::get('/index', [PacienteController::class, 'index'])->name('pacientes.index');
    
        Route::get('/listar', [PacienteController::class, 'listar'])->name('paciente.listar');
    
        Route::post('/buscar', [PacienteController::class, 'buscar'])->name('paciente.buscar');
    
        Route::prefix('/form')->group(function(){
            Route::get('/cadastrar', [PacienteController::class, 'cadastrar'])->name('paciente.cadastrar');
    
            Route::post('/salvar', [PacienteController::class, 'salvar'])->name('paciente.salvar');
    
            Route::get('/list-editar', [PacienteController::class, 'list_editar'])->name('paciente.list-editar');
    
            Route::get('/editar/{id}', [PacienteController::class, 'editar'])->name('paciente.editar');
    
            Route::put('/atualizar/{id}', [PacienteController::class, 'atualizar'])->name('paciente.atualizar');
    
            Route::get('/list-excluir', [PacienteController::class, 'list_excluir'])->name('paciente.list-excluir');
            
            Route::get('/excluir/{id}', [PacienteController::class, 'excluir'])->name('paciente.excluir');
        });
    });

});

Route::get('/matheus', function(){
    return view('site.usuario.editar');
});

// ARRUMAR:
// > Usuários
// - Permitir que itens sejam vistos paenas por administradores
// - Dialog do list-excluir
// - Visual do editar usuários