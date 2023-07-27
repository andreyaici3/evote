<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PemilihFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => random_int(1000000000000000,9999999999999999),
            'nama_lengkap' => $this->faker->firstName() . " " . $this->faker->lastName(),
            'tempat_lahir' => "Kuningan",
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin' => "Laki-Laki",
            "password" => bcrypt('12345'),
            'alamat' => $this->faker->address(),
            'username' => $this->faker->userName(),
        ];

    
    }
}
