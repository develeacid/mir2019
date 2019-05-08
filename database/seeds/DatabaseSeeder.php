<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //truncado de las tablas
      $this->truncateTables([
        'area',
        'users'
      ]);
      // llamado de los seeders
      $this->call(AreaSeeder::class);
      $this->call(UserSeeder::class);

    }

    protected function truncateTables(array $tables)
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');//comando directo a MYSQL, evita verificar llaves foraneas
      foreach ($tables as $table) {
        DB::table($table)->truncate();//Vaciar la tabla antes de ejecutar el seeder para no generar errores
      }
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');//activa la verificacion
    }
}
