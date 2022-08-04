<?php

namespace Database\Seeders;

use App\Models\RoomReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TransferSeeder::class,
            PackageSeeder::class,
            carRentalSeeder::class,
            PackageTypeSeeder::class,
        ]);
    }
}
