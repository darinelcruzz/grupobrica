<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\User::class)->create([
        	'name' => 'Lab3',
        	'username' => 'lab3',
        	'password' => Hash::make('helefante'),
        	'company' => 'owner',
        ]);

        factory(\App\User::class)->create([
        	'name' => 'Runa Test',
        	'username' => 'runa',
        	'password' => Hash::make('runa'),
        	'company' => 'runa',
        ]);

        factory(\App\User::class)->create([
        	'name' => 'Hercules Test',
        	'username' => 'hercules',
        	'password' => Hash::make('hercules'),
        	'company' => 'hercules',
        ]);
    }
}
