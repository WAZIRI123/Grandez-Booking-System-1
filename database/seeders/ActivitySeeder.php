<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity = [
            [
                'SAFARI BLUE',
                'Spend unforgettable day sailing on the crystal blue sea of Zanzibar.',
                'Zanzibar most talked about sea adventure where
                you will spend a magical day
                exploring the Menai bay conservation area and
                the beautiful Kwale sandbank',

            ],
            [
                'NUNGWI DHOW SUNSET CRUISE',
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
                'PRISON
                ISLAND
                TOUR',
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
            [
                'SNORKELING
                AT MNEMBA
                ISLAND.',
                'The bestSnorkeling
                experience in Zanzibar for a
                reason',
                'A journey to Mnemba island on the north east coast of the Zanzibar
                with vast marine reserve well known for its fish life. The sites
                surrounding the island are colorful and thriving making for a fun
                snorkeling at any time of the year.',
            ],
            [
                'SPICE
                TOUR',
                'Do you want to feel like theKing or
                Queen of the Spice
                Island?',
                'Spice tour is a must-do while on the island of
                Zanzibar, known as the Spice
                Island. Learn from your guide about its claim to
                fame during the 19th century
                as one of the world’s leading producers of
                spices.',

            ],
            [
                'NAKUPENDA
                ISLAND',
                'A day at the
                disappearing island.',
                'It is remarkable that this island only appears during the low tide in the
                afternoon. “Nakupenda” translated in Swahili means “I love you” and
                that name is not by chance the place will definitely conquer your
                heart.',

            ],
        ];
        for ($i = 1; $i <= count($activity); $i++) {
            Activity::create([
                'name' => $activity[$i-1][0],
                'image' => 'img/packages/packagesImg-' . $i . '.png',
                'description' => $activity[$i-1][1],
                'explanation' => '<p>' . $activity[$i-1][2] . '</p>',
            ]);
        }
    }
}
