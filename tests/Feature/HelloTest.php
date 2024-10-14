<?php

namespace Tests\Feature;

use App\Models\People;
use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    // スタート時にマイグレーションを行い、テスト時にはロールバックをして初期化する目的で記述
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     */
    public function testExample(): void
    {
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $message = "Hello";
        $this->assertEquals('Hello', $message);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);
    }

    public function testHello(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/people');
        $response->assertStatus(302);

        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/people');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }

    public function testDbHello(): void
    {
        User::factory()->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);
        User::factory(10)->create();
        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
        ]);

        People::factory()->create([
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => 12,
        ]);
        People::factory(10)->create();
        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => 12,
        ]);
    }

}
