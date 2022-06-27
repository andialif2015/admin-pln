<?php

namespace App\Controllers;

use App\Models\UserModel;


class Auth extends BaseController
{
    public function login(){
        if(session('id')){
            return redirect()->to(base_url('/dashboard'));
        }
       return view('auth/login');
    }
    public function prosesLogin(){
        $user_data = $this->request->getVar();     
        $userModel = new UserModel();

        

        try{
            $data['users'] = $userModel->where('username', $user_data['username'])->first();
            if($data['users'] == null OR !password_verify($user_data['password'], $data['users']->password)){
               
                session()->setFlashdata('message_login', "Username & Password Salah");
            
               
               return redirect()->to(base_url('/login'));
            }
            $params = ['id' => (int)$data['users']->id];
               session()->set($params);
            if($data['users']->role == 1){
                return redirect()->to(base_url('/admin/dashboard'));
            }
            return redirect()->to(base_url('/dashboard'));
            // return redirect()->to(base_url('/testing'));

        }catch(\Exception $e){
            dd($e->getMessage());
        }
        
        
    }

    public function logout(){
      session()->destroy();
      return redirect()->to(base_url('login'));
    }
}