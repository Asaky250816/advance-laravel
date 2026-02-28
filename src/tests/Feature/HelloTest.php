<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    /*
     * A basic feature test example.
     *
     * @return void

        *public function test_example()
        *{
        *$response = $this->get('/');

        *$response->assertStatus(200);
        *}
    */
    public function test_hello()
    {
        User ::factory()->create([
            'name' => 'aaa',
            'email' => 'bbb@ccc.com',
            'password' => 'test12345'
            ]);
        $this->assertDatabaseHas('users', [
            'name' => 'aaa',
            'email' => 'bbb@ccc.com',
            'password' => 'test12345'
            ]);
    }
}
        /*$this->assertTrue(true);
        $arr = [];
        $this->assertEmpty($arr);

        $text = "Hello World";
        $this->assertEquals("Hello World" , $text);

        $n = random_int(1, 100);
        $this->assertLessThanOrEqual(100, $n);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
        */

