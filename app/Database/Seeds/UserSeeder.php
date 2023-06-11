<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;


class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();
        $model->insert ([
            'username' => 'putri',
            'email' => 'putri@gmail.com',
            'password' => password_hash('4321', PASSWORD_DEFAULT)
        ]);
    }
}
