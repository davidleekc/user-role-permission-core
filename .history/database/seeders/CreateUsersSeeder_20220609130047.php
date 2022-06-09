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
               'name'=>'Driver User',
               'first_name'=>'Tally',
               'last_name'=>'Lee',
               'email'=>'driver@itsolutionstuff.com',
               'mobile'=>'0123456789',
               'is_admin'=>0,
               'is_driver'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Driver User3',
                'first_name'=>'Tally',
                'last_name'=>'Lee',
                'email'=>'driver2@itsolutionstuff.com',
                'mobile'=>'0172973657',
                'is_admin'=>0,
                'is_driver'=>1,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Driver User4',
                'first_name'=>'Tally',
                'last_name'=>'Lee',
                'email'=>'driver3@itsolutionstuff.com',
                'mobile'=>'0166419667',
                'is_admin'=>0,
                'is_driver'=>1,
                'password'=> bcrypt('123456'),
             ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
