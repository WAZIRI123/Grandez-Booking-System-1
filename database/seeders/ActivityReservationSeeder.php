<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=1; $i < 20; $i++) {
            $user = Reservation::create([
                'activity_id' => 1,
                'user_id' => 1,
                'code' => bin2hex(random_bytes(20)),
                'date' => $faker->dateTime(),
                'check_in' => $faker->dateTimeBetween('now', '+30 days'),
                'no_of_visitors' => $faker->randomDigit,
                'price' => 300,
                'total_price' =>5000,
                'status'=>$faker->randomElement(['waiting','confirmed','rejected'])
            ]);
        }
    }
}
