<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@itsolutionstuff.com',
               'phone'=>'0123456789',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Driver User',
               'email'=>'driver@itsolutionstuff.com',
               'phone'=>'0123456789',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Driver User2',
               'email'=>'driver2@itsolutionstuff.com',
               'phone'=>'0123456789',
               'type'=>2,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
