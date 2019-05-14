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
      Area::create([
        'name'  =>  'Direccion Cluster'
      ]);
      //DB::table('area')->insert([
      //  'name'  =>  'Direccion Tecnica'
      //]);
    }
}
