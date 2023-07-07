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
    Route::get('user', [HomeController::class, 'opcoes_users'])->name('opcao.users');
});

Route::prefix('user/')->group(function(){
    Route::get('cadastrar', [UserController::class, 'cadastrar'])->name('user.cadastrar');
});
