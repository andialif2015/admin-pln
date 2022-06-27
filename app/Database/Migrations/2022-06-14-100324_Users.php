<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true
            ],
            'username' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'role' => [
                'type'          => 'INT',
                'constraint'    => 1
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        //primary key
        $this->forge->addKey('id', TRUE);

        //membuat tabel User
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        //menghapus tabel User
        $this->forge->dropTable('users');
    }
}
