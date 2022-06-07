<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LivroController extends BaseController
{

    public function livros(){

        return view('livros_conteudo');

    }

    public function cadastro_livro(){

        return view('formulario_livro');

    }

    

}
