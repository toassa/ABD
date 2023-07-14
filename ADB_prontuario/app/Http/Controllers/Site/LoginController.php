<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('site.login');
    }
    
    public function entrar(Request $req){
        $dados = $req->all();
        if(Auth::attempt(['num_USP'=>$dados['num_USP'],'password'=>$dados['password']])){
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
