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
                // name
                'SAFARI BLUE',
                // descript intr
                'Spend unforgettable day sailing on the crystal blue sea of Zanzibar.',
                // explaination/description
                'Zanzibar most talked about sea adventure where
                you will spend a magical day
                exploring the Menai bay conservation area and
                the beautiful Kwale sandbank',
                // price
                [
                    '$180 per person',
                    '$120 per person (maximum 2 pax)',
                    '$110 per person (maximum 3 pax)',
                    '$100 per person (minimum 4 pax
                    and above'
                ],

                // Includes
                [
                    'Entrance fees',
                    'Boat fess',
                    'Lunch, fresh fruits and soft drinks',
                    'Transfers',
                    '',

                ],
                // Not Includes
                [
                    'Gratuities',
                    '',
                ],


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
                // price
                [
                    '$95 per person',
                    '$80 per person (maximum 2 pax)',
                    '$65 per person (maximum 3 pax)',
                    '$55 per person (minimum 4 pax
                                    and above)'
                ],

                // Includes
                [
                    'Snorkeling and swimming gears',
                    'Fruits and snacks',
                    'Transfers',
                    '',
                    '',

                ],
                // Not Includes
                [
                    'Lunch and drinks
                    unless requested',
                    '',
                ],
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
                // price
                [
                    '$125 per person',
                    '$85 per person (maximum 2 pax)',
                    '$75 per person (maximum 3 pax)',
                    '$65 per person (minimum 4 pax
                                    and above)'
                ],
                // Includes
                [
                    'Entrance fees',
                    'Boat fees',
                    'Tour guide & Transfers',
                    '',
                    '',

                ],

                // Not Includes
                [
                    ' Food and drinks',
                    'Gratuities',
                ],

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
                // price
                [
                    '$120 per person',
                    '$80 per person (maximum 2 pax)',
                    '$70 per person (maximum 3 pax)',
                    '$65 per person (minimum 4 pax
                                    and above)'
                ],
                // Includes
                [
                    'Snorkeling gears',
                    'Boat fees',
                    'Transfers',
                    'Lunch, fresh fruits and soft drinks',
                    'Entrance fees',

                ],
                // Not Includes
                [
                    'Gratuities',
                    '',
                ],
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
                // price
                [
                    '$90 per person',
                    '$70 per person (maximum 2 pax)',
                    '$60 per person (maximum 3 pax)',
                    '$50 per person (minimum 4 pax and
                                    above)'
                ],
                // Includes
                [
                    'Entrance fees',
                    'Tour guide',
                    'Transfers',
                    '',
                    '',

                ],
                // Not Includes
                [
                    'Gratuities',
                    'Food and
                    cooking class unless requested',
                ],

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
                // price
                [
                    '$160 per person',
                    '$125 per person (maximum 2 pax)',
                    '$95 per person (maximum 3 pax)',
                    '$85 per person (minimum 4 pax
                                    and above)'
                ],
                // Includes
                [
                    'Swimming gears',
                    'Boat fees',
                    'Transfers',
                    'Lunch, fresh fruits and
                    soft drinks',
                    '',
                ],
                // Not Includes
                [
                    'Gratuities',
                    'Food and
                    cooking class unless requested',
                ],


            ],
        ];
        for ($i = 1; $i <= count($activity); $i++) {
            Activity::create([
                'name' => $activity[$i - 1][0],
                'image' => 'img/packages/packagesImg-' . $i . '.png',
                'description' => $activity[$i - 1][1],
                'explanation' => '<p>' . $activity[$i - 1][2] . '</p>',
                'price0' =>  $activity[$i - 1][3][0],
                'price1' =>  $activity[$i - 1][3][1],
                'price2' =>  $activity[$i - 1][3][2],
                'price3' =>  $activity[$i - 1][3][3],
                'include0' =>  $activity[$i - 1][4][0],
                'include1' =>  $activity[$i - 1][4][1],
                'include2' =>  $activity[$i - 1][4][2],
                'include3' =>  $activity[$i - 1][4][3],
                'include4' =>  $activity[$i - 1][4][4],
                'notInclude0' =>  $activity[$i - 1][5][0],
                'notInclude1' =>  $activity[$i - 1][5][1],
            ]);
        }
    }
}
