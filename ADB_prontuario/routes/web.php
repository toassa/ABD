<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\Admin\PrimeiraConsultaController;
use App\Http\Controllers\Admin\MedicamentoController;

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

        Route::post('/buscar', [UserController::class, 'buscar'])->name('users.buscar');
    
        Route::prefix('/form')->group(function(){
            Route::get('/cadastrar', [UserController::class, 'cadastrar'])->name('users.cadastrar');
    
            Route::post('/salvar', [UserController::class, 'salvar'])->name('users.salvar');
    
            Route::get('/list-editar', [UserController::class, 'list_editar'])->name('user.list-editar');

            Route::get('/editar/{num_USP}', [UserController::class, 'editar'])->name('users.editar');
    
            Route::put('/atualizar/{num_USP}', [UserController::class, 'atualizar'])->name('users.atualizar');
    
            Route::get('/list-excluir', [UserController::class, 'list_excluir'])->name('users.list-excluir');

            Route::get('/excluir/{num_USP}', [UserController::class, 'excluir'])->name('users.excluir');
    
            Route::get('/list-desativar', [UserController::class, 'list_desativar'])->name('users.list-desativar');

            Route::get('/desativar/{num_USP}', [UserController::class, 'desativar'])->name('users.desativar');
        });
    });
});

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('paciente')->group(function(){
        Route::get('/', [PacienteController::class, 'listar'])->name('opcao.pacientes');
        
        Route::get('/index', [PacienteController::class, 'index'])->name('pacientes.index');
    
        Route::get('/listar', [PacienteController::class, 'listar'])->name('paciente.listar');
    
        Route::post('/pesquisar', [PacienteController::class, 'pesquisar'])->name('paciente.pesquisar');

        Route::prefix('/form')->group(function(){
            Route::get('/cadastrar', [PacienteController::class, 'cadastrar'])->name('paciente.cadastrar');
    
            Route::post('/salvar/{num_registro}', [PacienteController::class, 'salvar'])->name('paciente.salvar');
    
            Route::get('/list-editar', [PacienteController::class, 'list_editar'])->name('paciente.list-editar');
    
            Route::get('/editar/{id}', [PacienteController::class, 'editar'])->name('paciente.editar');
    
            Route::put('/atualizar/{id}', [PacienteController::class, 'atualizar'])->name('paciente.atualizar');
    
            Route::get('/list-excluir', [PacienteController::class, 'list_excluir'])->name('paciente.list-excluir');
            
            Route::get('/excluir/{id}', [PacienteController::class, 'excluir'])->name('paciente.excluir');
        });

        Route::prefix('/consulta')->group(function(){
            Route::get('/menu/{num_registro}', [PrimeiraConsultaController::class, 'menu'])->name('consulta.menu');

            Route::get('/menu_atendimento/{num_registro}', [PrimeiraConsultaController::class, 'menu_atendimento'])->name('consulta.menu_atendimento');
            
            Route::get('/primeiro_atendimento/{num_registro}', [PrimeiraConsultaController::class, 'primeiro_atendimento'])->name('consulta.primeiro_atendimento');
        
            Route::get('/atividades_educativas/{num_registro}', [PrimeiraConsultaController::class, 'atividades_educativas'])->name('consulta.atividades_educativas');
        
            Route::get('/automonitorizacao/{num_registro}', [PrimeiraConsultaController::class, 'automonitorizacao'])->name('consulta.automonitorizacao');
            
            Route::get('/cardiovascular_dados/{num_registro}', [PrimeiraConsultaController::class, 'cardiovascular_dados'])->name('consulta.cardiovascular_dados');

            Route::get('/comorbidades/{num_registro}', [PrimeiraConsultaController::class, 'comorbidades'])->name('consulta.comorbidades');

            Route::get('/complicacoes/{num_registro}', [PrimeiraConsultaController::class, 'complicacoes'])->name('consulta.complicacoes');

            Route::get('/diagnostico_atual/{num_registro}', [PrimeiraConsultaController::class, 'diagnostico_atual'])->name('consulta.diagnostico_atual');

            Route::get('/dieta/{num_registro}', [PrimeiraConsultaController::class, 'dieta'])->name('consulta.dieta');

            Route::get('/exames_fisicos/{num_registro}', [PrimeiraConsultaController::class, 'exames_fisicos'])->name('consulta.exames_fisicos');

            Route::get('/exercicios_fisicos/{num_registro}', [PrimeiraConsultaController::class, 'exercicios_fisicos'])->name('consulta.exercicios_fisicos');

            Route::get('/familiar_historico/{num_registro}', [PrimeiraConsultaController::class, 'familiar_historico'])->name('consulta.familiar_historico');

            Route::get('/frequencia_acompanhamento/{num_registro}', [PrimeiraConsultaController::class, 'frequencia_acompanhamento'])->name('consulta.frequencia_acompanhamento');

            Route::get('/ginecologico_dados/{num_registro}', [PrimeiraConsultaController::class, 'ginecologico_dados'])->name('consulta.ginecologico_dados');

            Route::get('/habitos_vida/{num_registro}', [PrimeiraConsultaController::class, 'habitos_vida'])->name('consulta.habitos_vida');

            Route::get('/internacoes/{num_registro}', [PrimeiraConsultaController::class, 'internacoes'])->name('consulta.internacoes');

            Route::get('/nascimento/{num_registro}', [PrimeiraConsultaController::class, 'nascimento'])->name('consulta.nascimento');

            Route::get('/neuropatico_comprometimento/{num_registro}', [PrimeiraConsultaController::class, 'neuropatico_comprometimento'])->name('consulta.neuropatico_comprometimento');

            Route::get('/pes_exame/{num_registro}', [PrimeiraConsultaController::class, 'pes_exame'])->name('consulta.pes_exame');

            Route::get('/primeiro_diagnostico/{num_registro}', [PrimeiraConsultaController::class, 'primeiro_diagnostico'])->name('consulta.primeiro_diagnostico');

            Route::get('/tratamento/{num_registro}', [PrimeiraConsultaController::class, 'tratamento'])->name('consulta.tratamento');

        });

        Route::prefix('/medicamentos')->group(function(){
            Route::get('/index/{num_registro}', [MedicamentoController::class, 'index'])->name('medicamento.index');

            Route::get('/cadastrar/{num_registro}', [MedicamentoController::class, 'cadastrar'])->name('medicamento.cadastrar');

            Route::prefix('/form')->group(function(){
                Route::post('/salvar/{num_registro}', [MedicamentoController::class, 'salvar'])->name('medicamento.salvar');
            });
        });
    });
});

Route::get('/teste', function(){
    return view('site\paciente\consulta\atividades_educativas\cadastrar');
});

Route::get('/500', function(){
    return view('errors/500');
});

Route::get('/419', function(){
    return view('errors/419');
});

// ARRUMAR:
// > Usuários
// - Permitir que itens sejam vistos paenas por administradores
// - Dialog do list-excluir
// - Visual do editar usuários
// - Se excluir o próprio usuário, fazer logout
// - Não deixar desativar todos os usuários (ao menos um ativo)
// - Aceitar acentos 