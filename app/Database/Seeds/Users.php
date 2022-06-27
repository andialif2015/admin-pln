<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        // $users_data = [
        //     [
        //         'username' => 'adminpln',
        //         'password' => password_hash('admin123', PASSWORD_DEFAULT),
        //         'role'     => 1
        //     ]
        // ];
        $users_data = [
            [
                'username' => 'alif',
                'password' => password_hash('alif123', PASSWORD_DEFAULT),
                'role'     => 2
            ]
        ];

        foreach($users_data as $data){
            //insert data
            $this->db->table('users')->insert($data);
        }
    }
}
