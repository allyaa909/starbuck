<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'name' => 'Admin',
        	'phone' => '08977655',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('admin1234')
        ]);
    }
}
