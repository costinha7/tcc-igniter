<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClienteController extends BaseController
{
    public function cadastro_cliente()
    {
        return view('cadastro_cliente');
    }
}
