<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
{
    public function up()
    {
     $this->forge->addField([
            'id_livro' => [
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => false,
            'unsigned'   => true,
            'auto_increment' => true,
            ],
            'titulo_livro'  => [
            'genero' => 'VARCHAR',
            'codigo' => 'VARCHAR',
            'null' => false,
            ],
            'ex' => [
            'type' => 'CHAR',
            'constraint' => '11',
            'null' => false,  
            ],
            'ex' =>[
            'type' => 'DATE',
             'null' => false,  
            ],
            'ex' =>[
            'type' => 'CHAR',
            'constraint' => '14',
            'null' => false,  
            ],
            'ex' =>[
            'type' => 'VARCHAR',
             'constraint' => '50',
             'null' => false,   
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
