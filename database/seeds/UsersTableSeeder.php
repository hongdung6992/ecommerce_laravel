<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'id' => 1,
			'name' => 'Admin',
			'email' => 'admin@gmail.com',
			'password' => Hash::make('123123'),
			'role_id' => 1
		]);
		
	}
}
