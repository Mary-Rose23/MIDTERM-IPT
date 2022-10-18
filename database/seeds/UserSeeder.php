<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Encina',
                'fname'=>'Altair',
                'address'=>'Potohan, Tubigon, Bohol.',
                'phone'=>'0934524429',
                'email'=>'altair_enc@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Dumanat',
                'fname'=>'Mary Rose',
                'address'=>'Potohan, Tubigon, Bohol.',
                'phone'=>'0936456689',
                'email'=>'d_maryrose31@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Macabugto',
                'fname'=>'Acejoy',
                'address'=>'Lapu-lapu City, Cebu.',
                'phone'=>'0935648394',
                'email'=>'acejoy_m@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
