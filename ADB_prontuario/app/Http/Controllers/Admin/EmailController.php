<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class EmailController extends Controller
{
    public function index(){
        return view("admin.email.emailconfirmar",compact("user"));
    }

    public function confirmar(Request $req){
        //chamar os dados do usuário
        $time=$req->input('time');
        $resposta=$req->input('codigoresp');
        $respostacorreta=$req->input('codigo');
        $email = $req->input('email');

        if($resposta==$respostacorreta)
        {
            if (time()-$time<3600)
            {
                User::where('email', $email)->update(['autenticado' => true]);

                return redirect()->route('home');
            }
            else
            {
                return redirect()->route('admin.login');
            }

        }
        else{
            return redirect()->route('admin.login');
        }
    }

    public function gerarCodigo(Request $req){  
		$this->validate($req, [
              'email' => 'required|email|exists:users,email',
                 ]);
        
        $email = $req->all();

        $info = new \stdClass();
        $info->email = $email['email'];
        $info->codigo = $codigo=rand(10000,99999);
        $info->time = $time = time();

        \Illuminate\Support\Facades\Mail::send(new \App\Mail\EmailSenha($info));

        return view('senha.confirmar_email_senha', compact('info'));

    }

    public function mudarSenha(Request $req){

        $time = $req->input('time');
        $resposta = $req->input('codigoresp');
        $respostacorreta = $req->input('codigo');

        $email = $req->input('email');
        $senha = bcrypt($req->input('senhaNova'));


        if($resposta == $respostacorreta && time() - $time < 3600)
        {
            if(User::where('email_user', $email))
            {
                $dados = [
                    'senha_user' => $senha,
                ];
                
                $user = [
                    'password' => $senha,
                ];
                User::where('email', $email)->update($user);

                // ::where('email', $email)->update($dados);
                
            }
            
            return redirect()->route('admin.login');
        }        
        else 
        {   
            // return view('senha.confirmar_email_senha', compact('info'));
            return redirect()->back()->with('error', 'Os dados não correspondem.');
        }
    }
}
