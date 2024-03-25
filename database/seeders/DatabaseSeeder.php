<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\AdApplication;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(300)->create();
        $users = \App\Models\User::all()->shuffle();

        for($i = 0; $i < 20; $i++) {
            \App\Models\Employer::factory()->create([
                'user_id' => $users->pop()->id
            ]);
        }

        $employers = \App\Models\Employer::all();

        for($i = 0; $i < 100; $i++) {
            \App\Models\Ad::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }

        foreach($users as $user) {
            $ads = Ad::inRandomOrder()->take(rand(0, 4))->get();

            foreach($ads as $ad) {
                AdApplication::factory()->create([
                    'ad_id' => $ad->id,
                    'user_id' => $user->id
                ]);
            }
        }

        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Maciej Studzinski',
            'email' => 'jozifster@gmail.com',
        ]);
    }
}
