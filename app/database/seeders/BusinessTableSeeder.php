<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Businesses::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Business::create([
                'name' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
    }
}
