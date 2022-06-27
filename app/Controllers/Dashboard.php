<?php

namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index(){
        $userModel = new UserModel();
        $id = session()->get('id');
        $data['user'] = $userModel->where('id', $id)->first();
        dd($data['user']);   

        // return view('/dashboard/index');
    }

}

