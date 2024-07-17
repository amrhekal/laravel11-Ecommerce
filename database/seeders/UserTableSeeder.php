<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        User::insert([
        [
            'name'          =>  'Amr',
            'username'      =>  'AmrHekal',
            'phone'         => fake()->phoneNumber(),
            'address'       => fake()->streetAddress(),
            'email'         =>  'amrhekal@gmail.com',
            'role'          =>  'admin',
            'status'        =>  'active',
            'password'      =>  Hash::make('amrhekal123'),
            'remember_token'    => Str::random(10),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        //vendor
        [
            'name'          =>  'Ameer',
            'username'      =>  'AmeerHekal',
            'phone'         => fake()->phoneNumber(),
            'address'       => fake()->streetAddress(),
            'email'         =>  'ameerhekal@gmail.com',
            'role'          =>  'vendor',
            'status'        =>  'active',
            'password'      =>  Hash::make('ameerhekal123'),
            'remember_token'    => Str::random(10),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        //user
        [
            'name'          =>  'abdalla',
            'username'      =>  'abdallaHekal',
            'phone'         => fake()->phoneNumber(),
            'address'       => fake()->streetAddress(),
            'email'         =>  'abdallahekal@gmail.com',
            'role'          =>  'user',
            'status'        =>  'active',
            'password'      =>  Hash::make('abdallahekal123'),
            'remember_token'    => Str::random(10),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
    }
}
