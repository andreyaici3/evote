<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PemilihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pemilih::factory(3)->create();
    }
}
