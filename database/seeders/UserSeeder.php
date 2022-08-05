<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => date('Y-m-d', strtotime(now())),
            'password' => Hash::make('123456'),
            'id_role' => 1,
        ]);
    }
}
