<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'                  => 'Joel Guinea',
            'email'                 => 'joelguinea69@gmail.com',
            'gender'                => 'Male',
            'email_verified_at'     =>  now(),
            'password' => bcrypt('qweqweqwe'), // password
            'remember_token' => Str::random(10),
        ])->assignRole('writer', 'admin');
    }
}
