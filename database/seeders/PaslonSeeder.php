<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PaslonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                "nomor_urut" => 1,
                "nama_paslon" => "Ir. H. Jokowi Dodo & K.H. Ma'ruf Amin",
                "informasi_paslon" => "",
                "foto" => "h79nl8IkW0NadKu3Uv6W.jpg", 
            ],
            [
                "nomor_urut" => 2,
                "nama_paslon" => "Novandra & Maulana",
                "informasi_paslon" => "Frontend Web",
                "foto" => "avtar_2.png", 
            ],
            [
                "nomor_urut" => 3,
                "nama_paslon" => "Andrey & Andriansyah",
                "informasi_paslon" => "Backend Web",
                "foto" => "avtar_3.png", 
            ],

        ])->each( function ($paslon){
            \App\Models\Paslon::create($paslon);
        }
            
        );
    }
}
