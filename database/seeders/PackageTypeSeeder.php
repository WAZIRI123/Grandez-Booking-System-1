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
        $type= [
            [
                'LUXURY PACKAGE',
            ],
            [
                'BUDGET PACKAGE',
            ],
            [
                'STANDARD PACKAGE',
            ],

        ];
        for ($i = 1; $i <= count($type); $i++) {
            PackageType::create([
                'name' => $type[$i-1][0],
            ]);
        }
    
    }
}
