<?php
use app\User;
use App\Models\Area;
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
      //implementacion de Eloquent en la consulta
      $area = Area::where('name','Direccion Tecnica')->value('id');


      dd($area);

        User::Create([
          'name'      =>  'Eleacid',
          'email'     =>  'ele.leader@gmail.com',
          'nivel'     =>  'admin',
          'password'  =>  bcrypt('LseRdlP0P'),
          'area_id'   =>  $area->id//ahora solo asignamos la variable
        ]);
    }
}
