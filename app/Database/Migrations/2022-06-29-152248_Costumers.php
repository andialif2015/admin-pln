<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Costumers extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
				'constraint'     => 255,
				'unsigned'       => true,
				'auto_increment' => true
            ],
            'UNITUPI' => [
                'type'           => 'INT',
                'constraint'     => 3  
            ],
            'UNITAP' =>[
                'type'           => 'VARCHAR',
                'constraint'     => '5'
            ],
            'UNITUP' =>[
                'type'           => 'INT',
                'constraint'     => 5
            ],
            'TGL_MOHON' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'NO_AGENDA' => [
                'type'           => 'INT',
                'constraint'     => 18
            ],
            'NO_REGISTER' => [
                'type'           => 'INT',
                'constraint'     => 13
            ],
            'IDPEL' => [
                'type'           => 'INT',
                'constraint'     => 12
            ],
            'NAMA' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'NAMA_PEMOHON' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'ALAMAT' => [
                'type'           => 'TEXT'
            ],
            'ALAMAT_PEMOHON' => [
                'type'           => 'TEXT'
            ],
            'KORDINAT_X' => [
                'type'           => 'DOUBLE',
                'constraint'     => '10,7'
            ],
            'KORDINAT_Y' => [
                'type'           => 'DOUBLE',
                'constraint'     => '10,7'
            ],
            'NO_TELP' => [
                'type'           => 'INT',
                'constraint'     => 12
            ],
            'NOTELP_HP' => [
                'type'           => 'INT',
                'constraint'     => 12
            ],
            'JENIS_TRANSAKSI' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10'
            ],
            'TARIF_LAMA' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5'
            ],
            'DAYA_LAMA' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5'
            ],
            'TARIF' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5'
            ],
            'DAYA' => [
                'type'           => 'INT',
                'constraint'     => 5
            ],
            'ASAL_MOHON' => [
                'type'           => 'VARCHAR',
                'constraint'     => '11'
            ],
            'JENIS_MK' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5'
            ],
            'RPUJL' => [
                'type'           => 'INT',
                'constraint'     => 6
            ],
            'RPBP' => [
                'type'           => 'INT',
                'constraint'     => 9
            ],
            'RPSTROM_AWAL' => [
                'type'           => 'INT',
                'constraint'     => 7
            ],
            'JENIS_BAYAR' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5'
            ],
            'TGLBAYAR' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'STATUS_PERMOHONAN' => [
                'type'           => 'VARCHAR',
                'constraint'     => '9'
            ],
            'STATUSPDL' => [
                'type'           => 'VARCHAR',
                'constraint'     => '9'
            ],
            'TGL_SIP' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'TGL_PK' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'UNITTP' => [
                'type'           => 'INT',
                'constraint'     => 5
            ],
            'TGL_PEREMAJAAN' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'TGL_RUBAHMK' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'THBLMUT' => [
                'type'           => 'INT',
                'constraint'     => 6
            ],
            'TGL_PDL' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'NOMOR_PDL' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'TGL_PENANGGUHAN' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'TGL_SIAPSAMBUNG' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'TGL_RESTITUSI' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'TGL_BPTITIPAN' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'TGL_PENGESAHAN' => [
                'type'           => 'DATE',
                'null'           => TRUE
            ],
            'DURASI_HARI_KERJA' => [
                'type'           => 'INT',
                'constraint'     => 3
            ],
            'DURAS_HARI_KALENDER' => [
                'type'           => 'INT',
                'constraint'     => 3
            ],
            'KRITERIA_TMP' => [
                'type'           => 'VARCHAR',
                'constraint'     => '15'
            ],
            'ALASAN_KRITERIA_TMP' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'KETERANGAN_ALASAN_KRITERIA_TMP' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'ESTIMASI_HARI_DURASI_LAYANAN' => [
                'type'           => 'INT',
                'constraint'     => 3
            ],
            'STATUS_PENAGGUHAN' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'ALASAN_PENANGGUHAN' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ],
            'KETERANGAN_ALASAN_PENANGGUHAN' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ],
            'STATUS_RESTITUSI_ATAU_TITIPAN' => [
                'type'           => 'VARCHAR',
                'constraint'     => '13'
            ],
            'PAKETSLO' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10'
            ],
            'PLTS_ATAP' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5'
            ]
        ]);

        //primary key
        $this->forge->addKey('id', TRUE);

        //membuat tabel
        $this->forge->createTable('costumers', TRUE);
    }

    public function down()
    {
        //menghapus database
        $this->forge->dropTable('costumers');
    }
}
