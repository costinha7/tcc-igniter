<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reserva extends Migration
{
        public function up()
    {
     $this->forge->addField([
            'id_reserva' => [
            'type'       => 'INT',
            'constraint' => 5,
            'null'       => false,
            'unsigned'   => true,
            'auto_increment' => true,
            ],
            'data_reserva' =>[
            'type' => 'DATE',
            'null' => false,  
            ],
            'data_entrega' =>[
            'type' => 'DATE',
             'null' => false,   
            ],
            'cliente_reserva' =>[
                'type' => 'VARCHAR',
                 'constraint' => '50',
                 'null' => false,   
            ],
            'clivro_reserva' =>[
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,   
            ]
        ]);
        $this->forge->addKey('id_reserva', true);
        $this->forge->createTable('reserva');
    }

    public function down()
    {
        $this->forge->dropTable('reserva');
    }
}

    

