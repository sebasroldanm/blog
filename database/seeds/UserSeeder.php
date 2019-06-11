<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        	'name' => 'Juan Carlos',
        	'description_id' => '1',
        	'email' => 'juan@app.com',
        	'password' => bcrypt('123'),
        ]);
    }
}
