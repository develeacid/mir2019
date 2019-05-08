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
          'name'      =>  'Eleacid',
          'email'     =>  'ele.leader@gmail.com',
          'nivel'     =>  'admin',
          'password'  =>  bcrypt('LseRdlP0P')
        ]);
    }
}
