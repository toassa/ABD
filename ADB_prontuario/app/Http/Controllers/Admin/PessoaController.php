<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function opcoes(){
        return view('admin.opcoes');
    }
}
