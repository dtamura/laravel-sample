<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		// データ削除
		DatabaseSeeder::truncateTable ( 'users' );
		
		// ユーザ登録
		App\Models\User::create ( [ 
				'name' => '一般 次郎',
				'email' => 'member@dtamura.local',
				'password' => bcrypt ( 'password' ) 
		] );
		App\Models\User::create ( [ 
				'name' => 'エキストラ  三郎',
				'email' => 'extra@dtamura.local',
				'password' => bcrypt ( 'password' ) 
		] );
	}
}
