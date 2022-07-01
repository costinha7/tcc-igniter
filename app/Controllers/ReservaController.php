<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservaModel;

class ReservaController extends BaseController
{
    public function cadastro_reserva(){

        return view('formulario_reserva');

    }

    //funcao para registrar livro.
    public function registroreserva(){

        $validation = $this->validate([

            'clivro_reserva'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=> 'Coloque o código do livro.'
                ]
                ],
            /*'COLUNA X'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=> 'DESC X'
                ]
                ]     */       
        ]);

        if(!$validation){
            return view('formulario_reserva',['validation'=>$this->validator]);
        }
        else
        {

            //echo 'ok'; vamos registrar no db
            $data_reserva = $this->request->getPost('data_reserva');
            $data_entrega = $this->request->getPost('data_entrega');
            $cliente_reserva = $this->request->getPost('cliente_reserva');
            $clivro_reserva = $this->request->getPost('clivro_reserva');

            $values = [
                'data_reserva'=>$data_reserva,
                'data_entrega'=>$data_entrega,
                'cliente_reserva'=>$cliente_reserva,
                'clivro_reserva'=>$clivro_reserva
            ];

            $reservaModel = new \App\Models\ReservaModel();
            $query = $reservaModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','algo aconteceu no registro');
                //return redirect()->to('formulario_funcionario')->with('fail','algo aconteceu no registro');
            }
            else
            {
                return redirect()->to('reservacontroller/cadastro_reserva')->with('success','Reserva Cadastrado!');
            }

        }
    }

    //
    public function __construct()
    {
        $this->reserva_model = new ReservaModel();
    }

     //pagina de consulta funcao consultar livros registrados
     public function reservas(){

        $data['reserva_info'] = $this->reserva_model->getReservas();

        echo view('reserva_conteudo', $data);

    }
       

    }
