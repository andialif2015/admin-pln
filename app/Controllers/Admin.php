<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function upload()
    {
        return view('admin/upload');
    }

    public function import()
    {
        $file = $this->request->getFile('file');
        $fileName = $file->getName();
        $extention = $file->getClientExtension();
        if($extention == 'xlsx'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($file);
        $data = $spreadsheet->getActiveSheet()->toArray();
        dd($data);
        
        return 'ok';
    }
}
