<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReservaController extends BaseController
{
    public function reservas(){

        return view('reserva_conteudo');

    }
}
