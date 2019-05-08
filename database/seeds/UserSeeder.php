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
      //implementacion basica para obtener el id de otra tabla
      //ejecutamos una consulta y guardamos el resultado en una variable
      $area = DB::table('area')->select('id')->take(1)->get();

      dd($area);

        DB::table('users')->insert([
          'name'      =>  'Eleacid',
          'email'     =>  'ele.leader@gmail.com',
          'nivel'     =>  'admin',
          'password'  =>  bcrypt('LseRdlP0P'),
          'area_id'   =>  $area[0]->id//regresa un objeto
        ]);
    }
}
