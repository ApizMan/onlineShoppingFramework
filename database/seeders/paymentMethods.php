<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class paymentMethods extends Seeder
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
            DB::table('paymentMethods') -> insert([
                'CardColor' => $faker->randomElement(['debit-card', 'debit-card card-2']),
                'TypeCard' => $faker->randomElement(['https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png','https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png',],),
                'CardClass' => $faker->randomElement(['visa', 'master']),
                'CardNumber' => $faker->creditCardNumber,
                'CardHolderName' => $faker->firstName,
                'ExpiredDate' => $faker->creditCardExpirationDateString,
            ]);
        }
    }
}
