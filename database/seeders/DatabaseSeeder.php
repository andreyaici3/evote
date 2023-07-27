<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
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
        // \App\Models\User::factory(10)->create();
        $this->call(PemilihSeeder::class);
        $this->call(PaslonSeeder::class);

        collect([
            [
                'name' => "Andrey Andriansyah",
                'email' => "andreyandri90@gmail.com",
                'email_verified_at' => now(),
                'password' => bcrypt("password"), // password
                'remember_token' => Str::random(10),
                'role' => 1
            ],
            [
                'name' => "Gugun Rizal Nugraha",
                'email' => "gugun@gmail.com",
                'email_verified_at' => now(),
                'password' => bcrypt("password"), // password
                'remember_token' => Str::random(10),
                'role' => 2
            ],

        ])->each( function ($paslon){
            \App\Models\User::create($paslon);
        }
            
        );
    }
}
