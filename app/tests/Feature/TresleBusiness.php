<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Business;

class TresleBusiness extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

   public function testBusinessCreatedSuccessfully()
   {
   $user = factory(Business::class)->create();
        $this->actingAs($business, 'api');

        $businessData = [
            "name" => "TresleBusiness",
            "price" => 10000000,
            "city" => "I don't know"
        ];	

        $this->json('POST', 'api/store-business', $businessData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJson([
                "business" => [
                    "name" => "TresleBusiness",
                    "price" => 10000000,
                    "city" => "I don't know"
                ],
                "message" => "Created successfully"
            ]);

   }   

}
