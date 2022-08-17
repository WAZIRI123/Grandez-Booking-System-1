<?php

namespace Database\Seeders;

use App\Models\PackageActivities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type= [
            [
                'prison island',
            ],
            [
                'spice tour',
            ],
            [
                'stone town tour',
            ],
            [
                'swim with the turles',
            ],
            [
                'kuza carve',
            ],
            [
                'the rock restaurant',
            ],
            [
                'jozani forest',
            ],
            [
                'nakupenda sandbank',
            ],
            [
                'donation',
            ],
            [
                'rest',
            ],

        ];
        for ($i = 1; $i <= count($type); $i++) {
            PackageActivities::create([
                'name' => $type[$i-1][0],
            ]);
        }
    }
}
