<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Models\CostumerModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->costumer = new CostumerModel();
        
    }

    public function index()
    {
        return view('admin/index');
    }

    public function upload()
    {
        return view('admin/upload');
    }

    public function preview()
    {
        $data['dataExcel'] = [];
        $file = $this->request->getFile('file');
        $fileName = $file->getName();
        $extention = $file->getClientExtension();
        if($extention == 'xlsx'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            
        }
        
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($file);
        $dataExcel = $spreadsheet->getActiveSheet()->toArray();
        // dd($dataExcel[2][35] == null ? 'true' : 'false');
        // echo $dataExcel[2][35] == null ? '0000-00-00' : 'false';
        // $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($dataExcel[2][35]);
        // return print_r($date->date);
        // dd($date->format('Y-m-d'));
        // dd($date);
        foreach($dataExcel as $key => $value){
            if($key == 0){
                continue;
            }
            if($value[0] == ''){
                return view('admin/preview', $data);
            }

            if($value[3] == null){
                $tglMohon = NULL;
            }else{
                $tglMohon = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[3])->format('Y-m-d');
            }
            if($value[26] == null){
                $tglMohon = NULL;
            }else{
                $tglBayar = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[26])->format('Y-m-d');
            }
            if($value[29] == null){
                $tglSip = NULL;
            }else{
                $tglSip = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[29])->format('Y-m-d');
            }
            if($value[30] == null){
                $tglPk = NULL;
            }else{
                $tglPk = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[30])->format('Y-m-d');
            }
            if($value[32] == null){
                $tglPeremajaan = NULL;
            }else{
                $tglPeremajaan = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[32])->format('Y-m-d');
            }
            if($value[33] == null){
                $tglRubahMk = NULL;
            }else{
                $tglRubahMk = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[33])->format('Y-m-d');
            }
            if($value[35] == null){
                $tglPdl = NULL;
            }else{
                $tglPdl = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[35])->format('Y-m-d');
            }
            if($value[37] == null){
                $tglPenangguhan = NULL;
            }else{
                $tglPenangguhan = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[37])->format('Y-m-d');
            }
            if($value[38] == null){
                $tglSiapSambung = NULL;
            }else{
                $tglSiapSambung = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[38])->format('Y-m-d');
            }
            if($value[39] == null){
                $tglRestitusi = NULL;
            }else{
                $tglRestitusi = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[39])->format('Y-m-d');
            }
            if($value[40] == null){
                $tglBpTitipan = NULL;
            }else{
                $tglBpTitipan = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[40])->format('Y-m-d');
            }
            if($value[41] == null){
                $tglPengesahan = NULL;
            }else{
                $tglPengesahan = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value[41])->format('Y-m-d');
            }
       
            $data['dataExcel'][] = [
                'UNITUPI' => $value[0],
                'UNITAP' => $value[1],
                'UNITUP' => $value[2],
                'TGL_MOHON' => $tglMohon,
                'NO_AGENDA' => $value[4],       
                'NO_REGISTER' => $value[5],
                'IDPEL' => $value[6],
                'NAMA' => $value[7],
                'NAMA_PEMOHON' => $value[8],
                'ALAMAT' => $value[9],
                'ALAMAT_PEMOHON' => $value[10],
                'KORDINAT_X' => $value[11],
                'KORDINAT_Y' => $value[12],
                'NO_TELP' => $value[13],
                'NOTELP_HP' => $value[14],
                'JENIS_TRANSAKSI' => $value[15],
                'TARIF_LAMA' => $value[16],
                'DAYA_LAMA' => $value[17],
                'TARIF' => $value[18],
                'DAYA' => $value[19],
                'ASAL_MOHON' => $value[20],
                'JENIS_MK' => $value[21],
                'RPUJL' => $value[22],
                'RPBP' => $value[23],
                'RPSTROM_AWAL' => $value[24],
                'JENIS_BAYAR' => $value[25],
                'TGLBAYAR' => $tglBayar,
                'STATUS_PERMOHONAN' => $value[27],
                'STATUSPDL' => $value[28],
                'TGL_SIP' => $tglSip,
                'TGL_PK' => $tglPk,
                'UNITTP' => $value[31],
                'TGL_PEREMAJAAN' => $tglPeremajaan,
                'TGL_RUBAHMK' => $tglRubahMk,
                'THBLMUT' => $value[34],
                'TGL_PDL' => $tglPdl,
                'NOMOR_PDL' => $value[36],
                'TGL_PENANGGUHAN' => $tglPenangguhan,
                'TGL_SIAPSAMBUNG' => $tglSiapSambung,
                'TGL_RESTITUSI' => $tglRestitusi,
                'TGL_BPTITIPAN' => $tglBpTitipan,
                'TGL_PENGESAHAN' => $tglPengesahan,
                'DURASI_HARI_KERJA' => $value[42],
                'DURAS_HARI_KALENDER' => $value[43],
                'KRITERIA_TMP' => $value[44],
                'ALASAN_KRITERIA_TMP' => $value[45],
                'KETERANGAN_ALASAN_KRITERIA_TMP' => $value[46],
                'ESTIMASI_HARI_DURASI_LAYANAN' => $value[47],
                'STATUS_PENAGGUHAN' => $value[48],
                'ALASAN_PENANGGUHAN' => $value[49],
                'KETERANGAN_ALASAN_PENANGGUHAN' => $value[50],
                'STATUS_RESTITUSI_ATAU_TITIPAN' => $value[51],
                'PAKETSLO' => $value[52],
                'PLTS_ATAP' => $value[53]
            ];
            
        }
        return view('admin/preview', $data);
       
    }
    public function import(){
        $data = $this->request->getVar('data');
    
        try{
            for($i=0; $i<count($data); $i++){
                $data[$i]['UNITUPI'] = (int)$data[$i]['UNITUPI'];
                $data[$i]['UNITUP'] = (int)$data[$i]['UNITUP'];
                $data[$i]['NO_AGENDA'] = (int)$data[$i]['NO_AGENDA'];
                $data[$i]['NO_REGISTER'] = (int)$data[$i]['NO_REGISTER'];
                $data[$i]['IDPEL'] = (int)$data[$i]['IDPEL'];
                $data[$i]['KORDINAT_X'] = (double)$data[$i]['KORDINAT_X'];
                $data[$i]['KORDINAT_Y'] = (double)$data[$i]['KORDINAT_Y'];
                $data[$i]['NO_TELP'] = (int)$data[$i]['NO_TELP'];
                $data[$i]['NOTELP_HP'] = (int)$data[$i]['NOTELP_HP'];
                $data[$i]['DAYA'] = (int)$data[$i]['DAYA'];
                $data[$i]['RPUJL'] = (int)$data[$i]['RPUJL'];
                $data[$i]['RPBP'] = (int)$data[$i]['RPBP'];
                $data[$i]['RPSTROM_AWAL'] = (int)$data[$i]['RPSTROM_AWAL'];
                $data[$i]['UNITTP'] = (int)$data[$i]['UNITTP'];
                $data[$i]['THBLMUT'] = (int)$data[$i]['THBLMUT'];
                $data[$i]['DURASI_HARI_KERJA'] = (int)$data[$i]['DURASI_HARI_KERJA'];
                $data[$i]['DURAS_HARI_KALENDER'] = (int)$data[$i]['DURAS_HARI_KALENDER'];
                $data[$i]['ESTIMASI_HARI_DURASI_LAYANAN'] = (int)$data[$i]['ESTIMASI_HARI_DURASI_LAYANAN'];
                
                $this->costumer->insert($data[$i]);
            } 
            
            return redirect()->to(base_url('admin/dashboard'));

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function tampilData(){
        $data['dataExcel'] = $this->costumer->findAll();
        
        return view('admin/daftar-data', $data);
    }
    public function sortir(){
        return view('admin/constructionsAdmin');
    }
    public function profile(){
      return view('admin/profile');
    }    
    public function setting(){
        return view('admin/setting'); 
    }
}
