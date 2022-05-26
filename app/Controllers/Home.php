<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;


class Home extends BaseController
{
    public function index()
    {
        /*$loginModel = new \App\Models\LoginModel();
        $loginUserID = session()->get('LoginUser');
        $userInfo = $loginModel->find($loginUserID);*/
        
        return view('home');
    }

    public function cadastro_cliente()
    {
        return view('cadastro_cliente');
    }

    public function formulario_funcionario(){

        return view('formulario_funcionario');

    }

    public function formulario_livro(){

        return view('formulario_livro');

    }

}

