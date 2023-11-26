<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class EmailController extends Controller
{
    public function index(){
        return view("admin.email.emailconfirmar",compact("user"));
    }

    public function confirmar(Request $req){
        // Obtém os dados da solicitação, incluindo o tempo, a resposta do usuário, a resposta correta e o email.
        $time = $req->input('time');
        $resposta = $req->input('codigoresp');
        $respostacorreta = $req->input('codigo');
        $email = $req->input('email');
    
        // Verifica se a resposta do usuário corresponde à resposta correta.
        if ($resposta == $respostacorreta) {
            // Verifica se o tempo passado desde a geração do código está dentro de um limite de 1/2 hora (1800 segundos).
            if (time() - $time < 1800) {
                // Atualiza o usuário no banco de dados, marcando-o como autenticado.
                User::where('email', $email)->update(['autenticado' => true]);
    
            } else {
                // Se o tempo expirou, redireciona o usuário para a página de login do administrador.
                return redirect()->route('admin.login');
            }
        } else {
            // Se a resposta do usuário não corresponde à resposta correta, redireciona o usuário para a página de login do administrador.
            return redirect()->route('admin.login');
        }
    }

    public function gerarCodigo(CustomerRequest $req){ 
        //Recebe o CustomerRequest como forma de validacao

		// $this->validate($req, [
        //       'email' => 'required|email|exists:users,email',
        //          ]);
        
        $email = $req->all();

        $info = new \stdClass();
        $info->email = $email['email']; //extraindo o endereço de email do formulário e armazenando-o no objeto $info
        $info->codigo = $codigo=rand(10000,99999); //gerando um número aleatório entre 10000 e 99999 e atribuindo-o à propriedade
        $info->time = $time = time(); // Atribuindo o tempo atual em segundos à propriedade time do objeto $info.

        \Illuminate\Support\Facades\Mail::send(new \App\Mail\EmailSenha($info));
        // Serviço de envio de email do Laravel. Foi criado uma instância da classe EmailSenha e passando o objeto $info como argumento para essa classe.

        return view('senha.confirmar_email_senha', compact('info'));
        //retornando uma visão chamada 'senha.confirmar_email_senha' e compactando a variável $info para que ela possa ser acessada na visão.

    }

    public function mudarSenha(Request $req){
        // Obtém os dados da solicitação, incluindo o tempo, a resposta do usuário, a resposta correta, o email e a nova senha.
        $time = $req->input('time');
        $resposta = $req->input('codigoresp');
        $respostacorreta = $req->input('codigo');
        $email = $req->input('email');
        $senha = bcrypt($req->input('senhaNova'));

        // Verifica se a resposta do usuário corresponde à resposta correta e se o tempo passado desde a geração do código está dentro de um limite de 1/2 hora.
        if($resposta == $respostacorreta && time() - $time < 1800)
        {
            // Verifica se existe um usuário com o email fornecido.
            if(User::where('email_user', $email))
            {
                // Atualiza a senha do usuário no banco de dados com a nova senha criptografada.

                // $dados = [
                //     'senha_user' => $senha,
                // ];
                $user = [
                    'password' => $senha,
                ];
                User::where('email', $email)->update($user);
                
            }
            // Redireciona o usuário para a página de login do administrador após a alteração bem-sucedida da senha.
            return redirect()->route('admin.login');
        }        
        else 
        {   
            return redirect()->route('enviar_email')->with('msg', 'O código está incorreto ou o tempo expirado.                   Por favor,tente novamente!');
            // Caso o codigo ou o tempo esteja errado/expirado, retornara erro na view enviar_email
        }
    }
}