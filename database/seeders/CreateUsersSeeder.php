<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
               'name'=>'Admin',
               'email'=>'johndoe@hotmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Regular User',
               'email'=>'reguser@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($user as $key => $val) {
            User::create($val);
        }
    }
}
