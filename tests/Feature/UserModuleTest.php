<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function test_load_userPage()
    {
        $this ->get('/usuarios')        //Peticion
              ->assertStatus(200)       //Respuesta
              ->assertSee('Usuarios');  //Ver
    }

}
