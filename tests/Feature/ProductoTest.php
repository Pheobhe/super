<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_si_se_puede_ver_la_pagina_de_productos(): void
    {
       // $response = $this->get('/productos');
        $response = $this->get(route('productos.index'));    //cualquiera de las dos formas es valida para llamar
   
        $response->assertStatus(200);
        
        $response->assertViewIs('productos.index');

       
    }
}
