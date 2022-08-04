<?php

namespace Database\Seeders;

use App\Models\Transfer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tranfers = [
            [
                'Airport Transfer To StoneTown (One Way)',
                '20',
            ],
            [
                'Matemwe (One Way)',
                '60',
            ],
            [
                'Matemwe (Round Trip)',
                '100',
            ],
            [
                'Kiwengwa/Pongwe/Uroa (One Way)',
                '50',
            ],
            [
                'Kiwengwa/Pongwe/Uroa (Round Trip)',
                '100',
            ],
            [
                'Nungwi (One Way)',
                '70',
            ],
            [
                'Nungwi (Round Trip Return Before 10PM)',
                '100',
            ],
            [
                'Nungwi (Round Trip Return After 10PM)',
                '120',
            ],
            [
                'Paje/Jambiani/Bwejuu/Michamvi  (One Way)',
                '60',
            ],
            [
                'Paje/Jambiani/Bwejuu/Michamvi  (Round Trip)',
                '100',
            ],
            [
                'Kizimkazi (One Way)',
                '70',
            ],
            [
                'Kizimkazi (Round Trip)',
                '100',
            ],
    
        ];
        for ($i = 1; $i <= count($tranfers); $i++) {
            Transfer::create([
                'name' =>$tranfers[$i-1][0],
                'price' =>$tranfers[$i-1][1],
            ]);
        }
    }
}
