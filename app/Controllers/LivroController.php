<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LivroModel;
use App\Controllers\BaseController;

class LivroController extends BaseController
{

   



    //pagina de cadastro
    public function cadastro_livro(){

        return view('formulario_livro');

    }

    //funcao para registrar livro.
    public function registrolivro(){

        $validation = $this->validate([

            'titulo'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=> 'Coloque um titulo.'
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
            return view('formulario_funcionario',['validation'=>$this->validator]);
        }
        else
        {

            //echo 'ok'; vamos registrar no db
            $titulo = $this->request->getPost('titulo');
            $codigo = $this->request->getPost('codigo');
            $volume = $this->request->getPost('volume');
            $idioma = $this->request->getPost('idioma');
            $genero = $this->request->getPost('genero');
            $data_publicacao = $this->request->getPost('data_publicacao');
            $edicao = $this->request->getPost('edicao');
            $data_registro = $this->request->getPost('data_registro');
            $autor = $this->request->getPost('autor');
            $editora = $this->request->getPost('editora');
            $descricao = $this->request->getPost('descricao');

            $values = [
                'titulo'=>$titulo,
                'codigo'=>$codigo,
                'volume'=>$volume,
                'idioma'=>$idioma,
                'genero'=>$genero,
                'data_publicacao'=>$data_publicacao,
                'edicao'=>$edicao,
                'data_registro'=>$data_registro,
                'autor'=>$autor,
                'editora'=>$editora,
                'descricao'=>$descricao
            ];

            $livroModel = new \App\Models\LivroModel();
            $query = $livroModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','algo aconteceu no registro');
                //return redirect()->to('formulario_funcionario')->with('fail','algo aconteceu no registro');
            }
            else
            {
                return redirect()->to('livrocontroller/cadastro_livro')->with('success','Livro Cadastrado!');
            }

        }
    }

    //funcao consultar livros registrados
    public function __construct()
    {
        $this->livro_model = new LivroModel();
    }

     //pagina de consulta
     public function livros(){

        $data['livro_info'] = $this->livro_model->getLivros();

        echo view('livros_conteudo', $data);

    }
       

    }
