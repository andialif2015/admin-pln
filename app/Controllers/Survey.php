<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CostumerModel;
use App\Models\SurveyModel;

class Survey extends BaseController
{

    function __construct()
    {
        $this->costumer = new CostumerModel();
        $this->survey = new SurveyModel();
    }
    public function index($id)
    {
        $data['costumer'] = $this->costumer->where(['id' => $id])->first();
        return view('dashboard/survey', $data);
    }
    public function proses()
    {
        $data = $this->request->getVar();
        try{
            $this->survey->insert($data);
            return redirect()->to(base_url('dashboard'));
        }catch(\Exception $e){
            return $e;
        }
    }
    public function show(){
        $data['costumer'] = $this->survey->findAll();
        // dd($data);
        return view('dashboard/daftar-survey', $data);
    }
}
