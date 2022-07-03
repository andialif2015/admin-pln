<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Survey extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'NO_AGENDA' => [
                'type' => 'INT',
                'constraint' => 25
            ],
            'TGL_MOHON' => [
                'type' => 'DATE'
            ],
            'NO_REGISTER' => [
                'type' => 'INT',
                'constraint' => 15
            ],
            'ID_PEL' => [
                'type' => 'INT',
                'constraint' => 15
            ],
            'ALAMAT' => [
                'type' => 'TEXT'
            ],
            'NO_TELP' => [
                'type' => 'INT',
                'constraint' => 12
            ],
            'DAYA' => [
                'type' => 'VARCHAR',
                'constraint' => 6
            ],
            'PANJANG_KABEL_SR' => [
                'type' => 'INT',
                'constraint' => 50
            ],
            'NAMA_SURVEYOR' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'TGL_SURVEY' => [
                'type' => 'DATE'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]

        ]);
        //primary key
        $this->forge->addKey('id', TRUE);

        //create table
        $this->forge->createTable('survey', TRUE);
    }

    public function down()
    {
        //drop table
        $this->forge->dropTable('survey', TRUE);
    }
}
