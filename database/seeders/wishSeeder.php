<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class wishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,3) as $value){
            DB::table('wish') -> insert([
                'picture' => $faker->image(null, 360, 360, 'cloth', true, 'jpg'),
                'ItemName' => $faker->words(),
                'ItemPrice' => $faker->randomFloat(1, 30),
                'ItemQuantity' => $faker->randomDigit(),
                'ItemDescription' => $faker->randomElement(['Baju, | makanan'])
            ]);
        }
    }
}
