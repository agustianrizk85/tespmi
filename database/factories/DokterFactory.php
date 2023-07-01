<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'nama_dokter'=>$this->faker->name(),
         'jumlah_pasien'=>$this->faker->numberBetween(1,10),
         'nama_pasien'=>$this->faker->name(),
         'nama_kasir'=>$this->faker->name(),
            
        ];
    }
}
