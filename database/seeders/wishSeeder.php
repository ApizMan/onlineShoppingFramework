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
                'picture' => $faker->randomElement(['https://suarasarawak.my/wp-content/uploads/2021/01/makanan-segera-gambar-bernama02.jpg','https://www.jlabella.com.my/site_media/img/JARM243_20220219181519.jpg',]),
                'ItemName' => $faker->word,
                'ItemPrice' => $faker->randomFloat(1, 2),
                'ItemQuantity' => $faker->word,
                'ItemDescription' => $faker->randomElement(['Baju', 'makan'])
            ]);
        }
    }
}
