<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use stdClass;

class LoginController extends Controller
{
    public function login(){
        return view('site.login');
    }
    
    public function entrar(Request $req){
        $dados = $req->all();
        if(Auth::attempt(['num_USP'=>$dados['num_USP'],'password'=>$dados['password']])){
            $user =new stdClass();
            $user->nome =Auth::User()->name;
            $user->email=Auth::User()->email;
            
            \Illuminate\Support\Facades\Mail::send(new \App\Mail\EnviarEmail($user));
            return redirect()->route('admin.opcoes');
        } else {
            return redirect()->route('admin.login');
        }
    }
    
    public function sair(){
        Auth::logout();
        return view('site.login');
    }

}
