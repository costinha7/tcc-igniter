<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Livro extends Migration
{
    public function up()
    {
     $this->forge->addField([
            'id_livro' => [
            'type'       => 'INT',
            'constraint' => 5,
            'null'       => false,
            'unsigned'   => true,
            'auto_increment' => true,
            ],
            'autor' => [
            'type' => 'VARCHAR',
            'constraint' => '20',
            'null' => false,  
            ],
            'codigo' =>[
            'type' => 'VARCHAR',
            'constraint' => '20',
             'null' => false,  
            ],
            'data_publicacao' =>[
            'type' => 'DATE',
            'null' => false,  
            ],
            'data_registro' =>[
            'type' => 'DATE',
             'null' => false,   
            ],
            'descricao' =>[
                'type' => 'VARCHAR',
                 'constraint' => '50',
                 'null' => false,   
            ],
            'edicao' =>[
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,   
            ],
            'editora' =>[
            'type' => 'VARCHAR',
            'constraint' => '50',
            'null' => false,   
            ],
            'genero' =>[
                'type' => 'VARCHAR',
                 'constraint' => '50',
                 'null' => false,   
            ],
            'idioma' =>[
                'type' => 'VARCHAR',
                 'constraint' => '50',
                 'null' => false,   
            ],
            'titulo' =>[
                'type' => 'VARCHAR',
                 'constraint' => '50',
                 'null' => false,   
            ],
            'volume' =>[
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,   
            ],
        ]);
        $this->forge->addKey('id_livro', true);
        $this->forge->createTable('livro');
    }

    public function down()
    {
        $this->forge->dropTable('livro');
    }
}
