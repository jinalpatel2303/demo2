<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
   public function run()
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('infinite_scroll_examples')->insert([
                'post_author' => $faker->text(40),
                'post_title'  => $faker->text(40),
                'post_description' => $faker->text(200),
            ]);
        }
        // $this->call(UsersTableSeeder::class);
    }
}
