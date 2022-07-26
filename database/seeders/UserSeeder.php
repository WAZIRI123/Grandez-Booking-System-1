<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'User',
            'code' => bin2hex(random_bytes(20)),
            'email' => 'waziriallyamiri123@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '08174835153', // password
            'remember_token' => Str::random(10),
            'avatar' => 'img/avatar/a.png'
        ]);

        $user->syncRoles('user');
        $user = User::create([
            'name' => 'justing',
            'code' => bin2hex(random_bytes(20)),
            'email' => 'justin@grandezzazanzibar.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '08174835153', // password
            'remember_token' => Str::random(10),
            'avatar' => 'img/avatar/a.png'
        ]);

        $user->syncRoles('admin');

        $user = User::create([
            'name' => 'Kiwale',
            'code' => bin2hex(random_bytes(20)),
            'email' => 'kiwale@grandezzazanzibar.com',
            'email_verified_at' => now(),
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '08174835153', // password
            'remember_token' => Str::random(10),
            'avatar' => 'img/avatar/a.png'
        ]);

        $user->syncRoles('admin');

        $user = User::create([
            'name' => 'Ibrahim',
            'code' => bin2hex(random_bytes(20)),
            'email' => 'ibrahim@grandezzazanzibar.com',
            'email_verified_at' => now(),
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '08174835153', // password
            'remember_token' => Str::random(10),
            'avatar' => 'img/avatar/a.png'
        ]);

        $user->syncRoles('admin');

        $faker = \Faker\Factory::create();

        for ($i=1; $i < 200; $i++) {
            $user = User::create([
                'name' => $faker->name(),
                'code' => bin2hex(random_bytes(20)),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => $faker->phoneNumber(), // password
                'remember_token' => Str::random(10),
                'avatar' => 'img/avatar/' . substr($faker->name(), 0, 1)  . '.png'
            ]);

            $user->syncRoles('user');
        }
    }
}
