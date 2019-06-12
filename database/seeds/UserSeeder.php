<?php

use App\Models\User;
use App\Models\Description;
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
    	$id_description_query = Description::where('title','Creador')->value('id');


        User::create([
        	'name' => 'Juan Carlos',
        	'description_id' => $id_description_query,
        	'email' => 'juan@app.com',
        	'password' => bcrypt('123'),
        ]);
    }
}
