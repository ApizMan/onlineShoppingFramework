<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,5) as $value){
            DB::table('profile') -> insert([
                'ProfileName' => $faker->firstname,
                'Email' => $faker->email,
                'Address' => $faker->address,
                'PhoneNumber' => $faker->phoneNumber,
                'Gender' => $faker->randomElement(['Male','Female']),
                'Birthday' => $faker->dateTimeBetween('-70 years', '-18 years'),
            ]);
        }
    }
}
