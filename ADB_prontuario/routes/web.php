<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\Admin\PrimeiraConsultaController;
use App\Http\Controllers\Admin\MedicamentoController;
use App\Http\Controllers\Admin\EmailController;


use App\Http\Controllers\Admin\Consulta\PrimeiroDiagnosticoController;
use App\Http\Controllers\Admin\Consulta\DiagnosticoAtualController;
use App\Http\Controllers\Admin\Consulta\ComplicacoesController;
use App\Http\Controllers\Admin\Consulta\AutomonitorizacaoController;
use App\Http\Controllers\Admin\Consulta\TratamentoController;
use App\Http\Controllers\Admin\Consulta\NascimentoController;
use App\Http\Controllers\Admin\Consulta\GinecologicosDadosController;
use App\Http\Controllers\Admin\Consulta\FrequenciaAcompanhamentoController;
use App\Http\Controllers\Admin\Consulta\InternacoesController;
use App\Http\Controllers\Admin\Consulta\CardiovascularDadosController;
use App\Http\Controllers\Admin\Consulta\ComorbidadesController;
use App\Http\Controllers\Admin\Consulta\FamiliarHistoricoController;
use App\Http\Controllers\Admin\Consulta\HabitosVidaController;
use App\Http\Controllers\Admin\Consulta\ExerciciosFisicosController;
use App\Http\Controllers\Admin\Consulta\DietaController;
use App\Http\Controllers\Admin\Consulta\AtividadesEducativasController;
use App\Http\Controllers\Admin\Consulta\ExamesFisicosController;
use App\Http\Controllers\Admin\Consulta\PesExameController;
use App\Http\Controllers\Admin\Consulta\NeuropaticoComprometimentoController;

Route::redirect('/', 'login');

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('admin.login');
    
    Route::get('/sair', [LoginController::class, 'sair'])->name('login.sair');
    
    Route::post('/entrar', [LoginController::class, 'entrar'])->name('login.entrar');
});

Route::get('/enviar_email', function(){
    return view('senha.enviar_email');
})->name('enviar_email');

Route::post('/email_senha', [EmailController::class, 'gerarCodigo'])->name('gerar_codigo');

Route::post('/confirmar_email_senha', [EmailController::class, 'mudarSenha'])->name('confirmar_email_senha');

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('opcoes')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin.opcoes');
    });
});

Route::middleware(['active.check'])->group(function () {        
    Route::group(['middleware' => 'auth'], function(){
        Route::prefix('user')->group(function(){
            Route::middleware(['admin.check'])->group(function () {
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
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::prefix('paciente')->group(function(){
            Route::get('/', [PacienteController::class, 'listar'])->name('opcao.pacientes');
        
            Route::get('/listar', [PacienteController::class, 'listar'])->name('paciente.listar');
        
            Route::get('/pesquisar', [PacienteController::class, 'pesquisar'])->name('paciente.pesquisar');

            Route::get('/configuracoes/{num_registro}', [PacienteController::class, 'configuracoes'])->name('paciente.configuracoes');

            Route::prefix('/form')->group(function(){
                Route::get('/cadastrar', [PacienteController::class, 'cadastrar'])->name('paciente.cadastrar');
        
                Route::post('/salvar/{num_registro}', [PacienteController::class, 'salvar'])->name('paciente.salvar');
        
                Route::get('/list-editar', [PacienteController::class, 'list_editar'])->name('paciente.list-editar');
        
                Route::get('/editar/{num_registro}', [PacienteController::class, 'editar'])->name('paciente.editar');
        
                Route::put('/atualizar/{num_registro}', [PacienteController::class, 'atualizar'])->name('paciente.atualizar');

                Route::get('/desativar/{num_registro}/{num_USP}', [PacienteController::class, 'desativar'])->name('paciente.desativar');
            });

            Route::prefix('/consulta')->group(function(){
                Route::get('/menu/{num_registro}', [PrimeiraConsultaController::class, 'menu'])->name('consulta.menu');

                Route::get('/menu_atendimento/{num_registro}', [PrimeiraConsultaController::class, 'menu_atendimento'])->name('consulta.menu_atendimento');
                
                Route::prefix('/diagnostico_atual')->group(function(){
                    Route::get('/op/{num_registro}', [DiagnosticoAtualController::class, 'opcao'])->name('diagnostico_atual.opcao');

                    Route::get('/{num_registro}', [DiagnosticoAtualController::class, 'index'])->name('diagnostico_atual.index');

                    Route::post('/salvar/{num_registro}/{num_USP}', [DiagnosticoAtualController::class, 'salvar'])->name('diagnostico_atual.salvar');
                
                    Route::get('/editar/{num_registro}', [DiagnosticoAtualController::class, 'editar'])->name('diagnostico_atual.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [DiagnosticoAtualController::class, 'atualizar'])->name('diagnostico_atual.atualizar');
                });
            
                Route::prefix('/atividades_educativas')->group(function(){
                    Route::get('/op/{num_registro}', [AtividadesEducativasController::class, 'opcao'])->name('atividades_educativas.opcao');

                    Route::get('/{num_registro}', [AtividadesEducativasController::class, 'index'])->name('atividades_educativas.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [AtividadesEducativasController::class, 'salvar'])->name('atividades_educativas.salvar');
                
                    Route::get('/editar/{num_registro}', [AtividadesEducativasController::class, 'editar'])->name('atividades_educativas.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [AtividadesEducativasController::class, 'atualizar'])->name('atividades_educativas.atualizar');
                });

                Route::prefix('/automonitorizacao')->group(function(){
                    Route::get('/op/{num_registro}', [AutomonitorizacaoController::class, 'opcao'])->name('automonitorizacao.opcao');

                    Route::get('/{num_registro}', [AutomonitorizacaoController::class, 'index'])->name('automonitorizacao.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [AutomonitorizacaoController::class, 'salvar'])->name('automonitorizacao.salvar');
                
                    Route::get('/editar/{num_registro}', [AutomonitorizacaoController::class, 'editar'])->name('automonitorizacao.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [AutomonitorizacaoController::class, 'atualizar'])->name('automonitorizacao.atualizar');
                });

                Route::prefix('/cardiovascular_dados')->group(function(){
                    Route::get('/op/{num_registro}', [CardiovascularDadosController::class, 'opcao'])->name('cardiovascular_dados.opcao');

                    Route::get('/{num_registro}', [CardiovascularDadosController::class, 'index'])->name('cardiovascular_dados.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [CardiovascularDadosController::class, 'salvar'])->name('cardiovascular_dados.salvar');
                
                    Route::get('/editar/{num_registro}', [CardiovascularDadosController::class, 'editar'])->name('cardiovascular_dados.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [CardiovascularDadosController::class, 'atualizar'])->name('cardiovascular_dados.atualizar');
                });

                Route::prefix('/comorbidades')->group(function(){
                    Route::get('/op/{num_registro}', [ComorbidadesController::class, 'opcao'])->name('comorbidades.opcao');

                    Route::get('/{num_registro}', [ComorbidadesController::class, 'index'])->name('comorbidades.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [ComorbidadesController::class, 'salvar'])->name('comorbidades.salvar');
                
                    Route::get('/editar/{num_registro}', [ComorbidadesController::class, 'editar'])->name('comorbidades.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [ComorbidadesController::class, 'atualizar'])->name('comorbidades.atualizar');
                });

                Route::prefix('/complicacoes')->group(function(){
                    Route::get('/op/{num_registro}', [ComplicacoesController::class, 'opcao'])->name('complicacoes.opcao');

                    Route::get('/{num_registro}', [ComplicacoesController::class, 'index'])->name('complicacoes.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [ComplicacoesController::class, 'salvar'])->name('complicacoes.salvar');
                
                    Route::get('/editar/{num_registro}', [ComplicacoesController::class, 'editar'])->name('complicacoes.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [ComplicacoesController::class, 'atualizar'])->name('complicacoes.atualizar');
                });
                
                Route::prefix('/diagnostico_atual')->group(function(){
                    Route::get('/op/{num_registro}', [DiagnosticoAtualController::class, 'opcao'])->name('diagnostico_atual.opcao');

                    Route::get('/{num_registro}', [DiagnosticoAtualController::class, 'index'])->name('diagnostico_atual.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [DiagnosticoAtualController::class, 'salvar'])->name('diagnostico_atual.salvar');
                
                    Route::get('/editar/{num_registro}', [DiagnosticoAtualController::class, 'editar'])->name('diagnostico_atual.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [DiagnosticoAtualController::class, 'atualizar'])->name('diagnostico_atual.atualizar');
                });

                Route::prefix('/dieta')->group(function(){
                    Route::get('/op/{num_registro}', [DietaController::class, 'opcao'])->name('dieta.opcao');

                    Route::get('/{num_registro}', [DietaController::class, 'index'])->name('dieta.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [DietaController::class, 'salvar'])->name('dieta.salvar');
                
                    Route::get('/editar/{num_registro}', [DietaController::class, 'editar'])->name('dieta.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [DietaController::class, 'atualizar'])->name('dieta.atualizar');
                });

                Route::prefix('/exames_fisicos')->group(function(){
                    Route::get('/op/{num_registro}', [ExamesFisicosController::class, 'opcao'])->name('exames_fisicos.opcao');

                    Route::get('/{num_registro}', [ExamesFisicosController::class, 'index'])->name('exames_fisicos.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [ExamesFisicosController::class, 'salvar'])->name('exames_fisicos.salvar');
                
                    Route::get('/editar/{num_registro}', [ExamesFisicosController::class, 'editar'])->name('exames_fisicos.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [ExamesFisicosController::class, 'atualizar'])->name('exames_fisicos.atualizar');
                });

                Route::prefix('/exercicios_fisicos')->group(function(){
                    Route::get('/op/{num_registro}', [ExerciciosFisicosController::class, 'opcao'])->name('exercicios_fisicos.opcao');

                    Route::get('/{num_registro}', [ExerciciosFisicosController::class, 'index'])->name('exercicios_fisicos.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [ExerciciosFisicosController::class, 'salvar'])->name('exercicios_fisicos.salvar');
                
                    Route::get('/editar/{num_registro}', [ExerciciosFisicosController::class, 'editar'])->name('exercicios_fisicos.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [ExerciciosFisicosController::class, 'atualizar'])->name('exercicios_fisicos.atualizar');
                });

                Route::prefix('/familiar_historico')->group(function(){
                    Route::get('/op/{num_registro}', [FamiliarHistoricoController::class, 'opcao'])->name('familiar_historico.opcao');

                    Route::get('/{num_registro}', [FamiliarHistoricoController::class, 'index'])->name('familiar_historico.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [FamiliarHistoricoController::class, 'salvar'])->name('familiar_historico.salvar');
                
                    Route::get('/editar/{num_registro}', [FamiliarHistoricoController::class, 'editar'])->name('familiar_historico.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [FamiliarHistoricoController::class, 'atualizar'])->name('familiar_historico.atualizar');
                });

                Route::prefix('/frequencia_acompanhamento')->group(function(){
                    Route::get('/op/{num_registro}', [FrequenciaAcompanhamentoController::class, 'opcao'])->name('frequencia_acompanhamento.opcao');

                    Route::get('/{num_registro}', [FrequenciaAcompanhamentoController::class, 'index'])->name('frequencia_acompanhamento.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [FrequenciaAcompanhamentoController::class, 'salvar'])->name('frequencia_acompanhamento.salvar');
                
                    Route::get('/editar/{num_registro}', [FrequenciaAcompanhamentoController::class, 'editar'])->name('frequencia_acompanhamento.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [FrequenciaAcompanhamentoController::class, 'atualizar'])->name('frequencia_acompanhamento.atualizar');
                });

                Route::prefix('/ginecologico_dados')->group(function(){
                    Route::get('/op/{num_registro}', [GinecologicosDadosController::class, 'opcao'])->name('ginecologico_dados.opcao');

                    Route::get('/{num_registro}', [GinecologicosDadosController::class, 'index'])->name('ginecologico_dados.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [GinecologicosDadosController::class, 'salvar'])->name('ginecologico_dados.salvar');
                
                    Route::get('/editar/{num_registro}', [GinecologicosDadosController::class, 'editar'])->name('ginecologico_dados.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [GinecologicosDadosController::class, 'atualizar'])->name('ginecologico_dados.atualizar');
                });

                Route::prefix('/habitos_vida')->group(function(){
                    Route::get('/op/{num_registro}', [HabitosVidaController::class, 'opcao'])->name('habitos_vida.opcao');

                    Route::get('/{tipo}/{num_registro}', [HabitosVidaController::class, 'index'])->name('habitos_vida.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [HabitosVidaController::class, 'salvar'])->name('habitos_vida.salvar');
                
                    Route::get('/{tipo}/{num_registro}/', [HabitosVidaController::class, 'editar'])->name('habitos_vida.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [HabitosVidaController::class, 'atualizar'])->name('habitos_vida.atualizar');
                });

                Route::prefix('/internacoes')->group(function(){
                    Route::get('/op/{num_registro}', [InternacoesController::class, 'opcao'])->name('internacoes.opcao');

                    Route::get('/{num_registro}', [InternacoesController::class, 'index'])->name('internacoes.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [InternacoesController::class, 'salvar'])->name('internacoes.salvar');
                
                    Route::get('/editar/{num_registro}', [InternacoesController::class, 'editar'])->name('internacoes.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [InternacoesController::class, 'atualizar'])->name('internacoes.atualizar');
                });

                Route::prefix('/nascimento')->group(function(){
                    Route::get('/op/{num_registro}', [NascimentoController::class, 'opcao'])->name('nascimento.opcao');

                    Route::get('/{num_registro}', [NascimentoController::class, 'index'])->name('nascimento.index');
                
                    Route::post('/salvar/{num_registro}/{num_USP}', [NascimentoController::class, 'salvar'])->name('nascimento.salvar');
                
                    Route::get('/editar/{num_registro}', [NascimentoController::class, 'editar'])->name('nascimento.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [NascimentoController::class, 'atualizar'])->name('nascimento.atualizar');
                });

                Route::prefix('/neuropatico_comprometimento')->group(function(){
                    Route::get('/op/{num_registro}', [NeuropaticoComprometimentoController::class, 'opcao'])->name('neuropatico_comprometimento.opcao');

                    Route::get('/{num_registro}', [NeuropaticoComprometimentoController::class, 'index'])->name('neuropatico_comprometimento.index');
                    
                    Route::post('/salvar/{num_registro}/{num_USP}', [NeuropaticoComprometimentoController::class, 'salvar'])->name('neuropatico_comprometimento.salvar');
                
                    Route::get('/editar/{num_registro}', [NeuropaticoComprometimentoController::class, 'editar'])->name('neuropatico_comprometimento.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [NeuropaticoComprometimentoController::class, 'atualizar'])->name('neuropatico_comprometimento.atualizar');
                });
                
                Route::prefix('/pes_exame')->group(function(){
                    Route::get('/op/{num_registro}', [PesExameController::class, 'opcao'])->name('pes_exame.opcao');

                    Route::get('/{num_registro}', [PesExameController::class, 'index'])->name('pes_exame.index');
                    
                    Route::post('/salvar/{num_registro}/{num_USP}', [PesExameController::class, 'salvar'])->name('pes_exame.salvar');
                
                    Route::get('/editar/{num_registro}', [PesExameController::class, 'editar'])->name('pes_exame.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [PesExameController::class, 'atualizar'])->name('pes_exame.atualizar');
                });

                Route::prefix('/primeiro_diagnostico')->group(function(){
                    Route::get('/op/{num_registro}', [PrimeiroDiagnosticoController::class, 'opcao'])->name('primeiro_diagnostico.opcao');

                    Route::get('/op/{num_registro}', [PrimeiroDiagnosticoController::class, 'opcao'])->name('primeiro_diagnostico.opcao');

                    Route::get('/{num_registro}', [PrimeiroDiagnosticoController::class, 'index'])->name('primeiro_diagnostico.index');
                    
                    Route::post('/salvar/{num_registro}/{num_USP}', [PrimeiroDiagnosticoController::class, 'salvar'])->name('primeiro_diagnostico.salvar');
                
                    Route::get('/editar/{num_registro}', [PrimeiroDiagnosticoController::class, 'editar'])->name('primeiro_diagnostico.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [PrimeiroDiagnosticoController::class, 'atualizar'])->name('primeiro_diagnostico.atualizar');
                });

                Route::prefix('/tratamento')->group(function(){
                    Route::get('/op/{num_registro}', [TratamentoController::class, 'opcao'])->name('tratamento.opcao');

                    Route::get('/{num_registro}', [TratamentoController::class, 'index'])->name('tratamento.index');
                    
                    Route::post('/salvar/{num_registro}/{num_USP}', [TratamentoController::class, 'salvar'])->name('tratamento.salvar');
                
                    Route::get('/editar/{num_registro}', [TratamentoController::class, 'editar'])->name('tratamento.editar');
        
                    Route::put('/atualizar/{num_registro}/{num_USP}', [TratamentoController::class, 'atualizar'])->name('tratamento.atualizar');
                });
            });

            Route::prefix('/medicamentos')->group(function(){
                Route::get('/index/{num_registro}', [MedicamentoController::class, 'index'])->name('medicamento.index');

                Route::get('/cadastrar/{num_registro}', [MedicamentoController::class, 'cadastrar'])->name('medicamento.cadastrar');
                
                Route::get('/editar/{num_registro}/{nome}', [MedicamentoController::class, 'editar'])->name('medicamento.editar');

                Route::prefix('/form')->group(function(){
                    Route::post('/salvar/{num_registro}/{num_USP}', [MedicamentoController::class, 'salvar'])->name('medicamento.salvar');

                    Route::put('/atualizar/{num_registro}/{nome}', [MedicamentoController::class, 'atualizar'])->name('medicamento.atualizar');
                });
            });
        });
    });
});


Route::get('/500', function(){
    return view('errors/500');
});

Route::get('/419', function(){
    return view('errors/419');
});

Route::get('/404', function(){
    return view('errors/404');
})->name('404error');


// ARRUMAR:
// - Dialog do list-excluir
// - Visual do editar usuários
// - Se excluir o próprio usuário, fazer logout
// - Não deixar desativar todos os usuários (ao menos um ativo)
// - Aceitar acentos 
// - Apresentar o nome do usuário, não o número USP
// - Acertar o coiso do guilerme para inatvios tamber, não apenas para adm
// - Editar paciente: não aparece as cidades
// - Colocar pop-up ao digitar errado num_USP ou senha
// - Colocar pop-up ao inserir mesma chave primaria paciente/usuario
//  Cookies: https://www.youtube.com/watch?v=LcPfercOA2M