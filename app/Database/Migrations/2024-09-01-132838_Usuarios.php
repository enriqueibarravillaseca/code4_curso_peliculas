<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
       $this->forge->addField([
        'id' =>[
            'type'       => 'INT',  
            'constraint' => 5,
            'unsinged'    => TRUE,
            'auto_increment' => TRUE

        ], 
        'usuario' =>[
            'type'       => 'VARCHAR',  
            'constraint' => 100,
            'unique'    => TRUE,
        ],
        'email' =>[
            'type'       => 'VARCHAR',  
            'constraint' => 100,
            'unique'     => TRUE
        ],
        'contrasena' =>[
            'type'       => 'VARCHAR',  
            'constraint' => 255,
            'unique'     => TRUE
        ],
        'tipo' =>[
            'type'       => 'ENUM',  
            'constraint' => ['admin','regular'],
            'default'    => 'regular'
        ]
    ]);
    $this->forge->addKey('id',TRUE);
    $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
