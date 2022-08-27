<?php

namespace Database\Seeders;

use App\Models\transferReservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransferReservationSeeder extends Seeder
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
            transferReservation::create([
                'transfer_id' => 1,
                'user_id' => 1,
                'code' => bin2hex(random_bytes(20)),
                'date' => $faker->dateTime(),
                'status'=>$faker->randomElement(['waiting','confirmed','rejected'])
            ]);
        }
    }
}
