<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_la_aplicación_devuelve_una_respuesta_exitosa(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        
    }
    public function test_para_ver_se_ve_documention_en_pagina_(){
        $response = $this->get('/');
        $response->assertSee('Documentation');
        $response->assertStatus(200);


    }
}
