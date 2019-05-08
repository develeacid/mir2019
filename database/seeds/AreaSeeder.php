<?php

use App\Models\Area;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Area::create([
        'name'  =>  'Direccion Tecnica'
      ]);
      //DB::table('area')->insert([
      //  'name'  =>  'Direccion Tecnica'
      //]);
    }
}
