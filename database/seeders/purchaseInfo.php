<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class purchaseInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,4) as $value){
            DB::table('purchase_info') -> insert([
                'delivery' => $faker->date,
                'ship' => $faker->randomElement(['POSLAJU, | +1324547755','BLUEDART, | +1598675986','JNT, | +120034553','NINJAVAN, | +14420332']),
                'status' => $faker->randomElement(['Delivered','Pending','Order Confirmed','Picked by the courier']),
                'track' => $faker->bothify('?????-#####'),
                'total' => $faker->randomFloat(70, 100, 220),
            ]);
        }
    }
}
