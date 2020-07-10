<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeaponsControllerTest extends TestCase
{
    public function test_get_all(){
        $response = $this->getJson('/weapons');
        $response->assertStatus(200);   
    }

    public function test_get_by_id(){
        $response = $this->getJson('/weapons/1');
        $response->assertStatus(200);   
    }

    public function test_post_weapon(){
        $response = $this->postJson('/weapons', [
            'name' => 'Weapons Test',
            'precision' => 50,
            'scope' => 50,
            'hurt' => 50
        ]);
        $response->assertStatus(201); 
    }

    public function test_patch_weapon(){
        $response = $this->patchJson('/weapons/1', [
            'name' => 'Weapons Test 2',
            'precision' => 90,
            'scope' => 90,
            'hurt' => 90
        ]);
        $response->assertStatus(200);
    }

    public function test_delete_by_id(){
        $response = $this->deleteJson('/weapons/1');
        $response->assertStatus(200);   
    }
}
