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
        $user = new \App\User();
        $user->create([
        	'name' => 'Andre Kehrer',
        	'email' => 'drekehrer@gmail.com',
        	'password' => bcrypt('123456')
        ]);
    }
}
