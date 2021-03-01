<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Business;
use tests\Test;
use Illuminate\Foundation\Testing\WithFaker;

class TresleBusinessTest extends TestCase
{

   public function testGetBusiness()
   {

        $this->withoutExceptionHandling();
        $response = $this->json('GET','api/get-businesses')->assertStatus(200);

   }   

   public function testCreateBusiness() {

       // $this->withoutExceptionHandling();
        $data = [
            'name' => $this->faker->company,
            'price' => $this->faker->randomNumber,
            'city' => $this->faker->city
        ];

        $this->json('POST', 'api/store-business', $data)
            ->assertStatus(201);
            //->assertJson($data);
     //  $this.assertDatabaseHas('business',$data);
    }

    public function testUpdateBusiness() {

        $this->withoutExceptionHandling();
        //$business = factory(Business::class)->create();

        $data = [
            'id' => 1,
            'name' => $this->faker->company,
            'price' => $this->faker->randomNumber,
            'city' => $this->faker->city
        ];

        $this->json('PUT','update-business', $data, $data->id)
            ->assertStatus(200);
            //->assertJson($data);
    }
/*
    public function test_can_show_post() {

        $post = factory(Post::class)->create();

        $this->get(route('posts.show', $post->id))
            ->assertStatus(200);
    }

    public function test_can_delete_post() {

        $post = factory(Post::class)->create();

        $this->delete(route('posts.delete', $post->id))
            ->assertStatus(204);
    }
*/
}
