<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'  => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password'  => bcrypt('admin')
        ]);
        \App\User::create([
            'name'  => 'penyetuju',
            'email' => 'penyetuju@gmail.com',
            'role' => 'penyetuju',
            'password'  => bcrypt('penyetuju')
        ]);
    }
}
