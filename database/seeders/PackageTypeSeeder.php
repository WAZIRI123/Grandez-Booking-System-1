<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\PackageType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'Packages',
                'Spend unforgettable day sailing on the crystal blue sea of Zanzibar.',
                'Zanzibar most talked about sea adventure where
                you will spend a magical day
                exploring the Menai bay conservation area and
                the beautiful Kwale sandbank',

            ],
            [
                'Transfers',
                'Whether you’re on
                honeymoon, with your
                family or by yourself,
                going on a
                sunset cruise at
                Nungwi is the perfect
                way to finish the day',
                'Whether you’re on
                honeymoon, with your
                family or by yourself,
                going on a
                sunset cruise at
                Nungwi is the perfect
                way to finish the day ',
            ],
            [
                'Activities',
                'Meet your new giant
                friends',
                'Prison Island also known as Changuu Island or
                Quarantine Island lies about
                30 minutes by boat from Stone Town. The island
                was used as a prison for
                rebellious slaves in 1860s and it is a home of
                endangered Aldabra giant
                tortoises where the oldest tortoise is 192 years
                old',

            ],

        ];
        for ($i = 1; $i <= count($packages); $i++) {
            PackageType::create([
                'name' => $packages[$i-1][0],
                'image' => 'img/packages/packagesImg-' . $i . '.png',
            ]);
        }
    
    }
}
