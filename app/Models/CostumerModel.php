<?php

namespace App\Models;

use CodeIgniter\Model;

class CostumerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'costumers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'UNITUPI' ,
        'UNITAP' ,
        'UNITUP' ,
        'TGL_MOHON' ,
        'NO_AGENDA' ,
        'NO_REGISTER' ,
        'IDPEL' ,
        'NAMA' ,
        'NAMA_PEMOHON' ,
        'ALAMAT' ,
        'ALAMAT_PEMOHON' ,
        'KORDINAT_X' ,
        'KORDINAT_Y' ,
        'NO_TELP' ,
        'NOTELP_HP' ,
        'JENIS_TRANSAKSI' ,
        'TARIF_LAMA' ,
        'DAYA_LAMA' ,
        'TARIF' ,
        'DAYA' ,
        'ASAL_MOHON' ,
        'JENIS_MK' ,
        'RPUJL' ,
        'RPBP' ,
        'RPSTROM_AWAL' ,
        'JENIS_BAYAR' ,
        'TGLBAYAR' ,
        'STATUS_PERMOHONAN' ,
        'STATUSPDL' ,
        'TGL_SIP' ,
        'TGL_PK' ,
        'UNITTP' ,
        'TGL_PEREMAJAAN' ,
        'TGL_RUBAHMK' ,
        'THBLMUT' ,
        'TGL_PDL' ,
        'NOMOR_PDL' ,
        'TGL_PENANGGUHAN' ,
        'TGL_SIAPSAMBUNG' ,
        'TGL_RESTITUSI' ,
        'TGL_BPTITIPAN' ,
        'TGL_PENGESAHAN' ,
        'DURASI_HARI_KERJA' ,
        'DURAS_HARI_KALENDER' ,
        'KRITERIA_TMP' ,
        'ALASAN_KRITERIA_TMP' ,
        'KETERANGAN_ALASAN_KRITERIA_TMP' ,
        'ESTIMASI_HARI_DURASI_LAYANAN' ,
        'STATUS_PENAGGUHAN' ,
        'ALASAN_PENANGGUHAN' ,
        'KETERANGAN_ALASAN_PENANGGUHAN' ,
        'STATUS_RESTITUSI_ATAU_TITIPAN' ,
        'PAKETSLO' ,
        'PLTS_ATAP'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
