<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

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
        $gender = $faker->randomElement(['male','female']);

        foreach (range(1,400) as $index) {
            DB::table('pegawais')->insert([
                'empid' => $faker->creditCardNumber(),
                'first_name'=> $faker->firstName($gender),
                'last_name'=>$faker->lastName($gender),
                'email'=>$faker->email(),
                'gender' => $gender,
                'tanggal_masuk'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'gaji'=>$faker->numberBetween($min = 3000000, $max = 10000000),
            ]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
