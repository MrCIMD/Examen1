<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeaponsControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

 
    public function test_get_all(){
        $response = $this->getJson('api/weapons');
        $response->assertStatus(200);   
    }

    public function test_get_by_id(){
        $response = $this->getJson('api/weapons/1');
        $response->assertStatus(200);   
    }
 

    public function test_post_weapon(){
        $response = $this->postJson('api/weapons', [
            'name' => 'Weapons Test',
            'precision' => 50,
            'scope' => 50,
            'hurt' => 50
        ]);
        $response->assertJson(['success' => true]); 
    }

    public function test_patch_weapon(){
        $response = $this->patchJson('api/weapons/1', [
            'name' => 'Weapons Test',
            'precision' => 80,
            'scope' => 80,
            'hurt' => 80
        ]);
        $response->assertJson(['success' => true]); 
    }

    public function test_delete_by_id(){
        $response = $this->deleteJson('api/weapons/1');
        $response->assertStatus(200);   
    }
 
}
