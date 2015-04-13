<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->createUsers();
	}

	private function createUsers()
	{
		Credlr\User::create([
			'name' => 'Dave',
			'email' => 'dave@dave.com',
			'password' => \Hash::make('test'),
		]);
		Credlr\User::create([
			'name' => 'Jon',
			'email' => 'jon@jon.com',
			'password' => \Hash::make('test'),
		]);
	}
}
