<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Super Admin',
               'email'=>'admin@gmail.com',
               'type'=>0,
               'password'=> Hash::make('12345678'),
            ],
            [
               'name'=>'Trucker User',
               'email'=>'trucker@gmail.com',
               'type'=> 1,
               'password'=> Hash::make('12345678'),
            ],
            [
               'name'=>'Shipper User',
               'email'=>'shipper@gmail.com',
               'type'=>2,
               'password'=> Hash::make('12345678'),
            ],
            [
               'name'=>'Broker User',
               'email'=>'broker@gmail.com',
               'type'=>3,
               'password'=> Hash::make('12345678'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }

    }
}
