<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LivroController extends BaseController
{
    public function formulario_livro(){

        return view('formulario_livro');

    }

}
