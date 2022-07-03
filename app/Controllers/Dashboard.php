<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CostumerModel;


class Dashboard extends BaseController
{
    function __construct()
    {   
        $this->costumer = new CostumerModel();
    }
    public function index()
    {
        return view('/dashboard/index');
    }
    public function show()
    {
        $data['dataExcel'] = $this->costumer->findAll();

        return view('dashboard/daftar-data', $data);

    }

}

