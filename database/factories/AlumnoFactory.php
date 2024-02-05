<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre"=>fake()->name("male"),
            "dir"=>fake()->address(),
            "email"=>fake()->email(),
            "dni"=>$this->dni()
        ];
    }
    private function dni()
    {
        $letras="TRWAGMYFPDXBNJZSQVHLCKE";
        $num_dni=fake()->randomNumber("8",true);
            info("numero $num_dni");
        $letra=$letras[$num_dni%23];
        return "$num_dni-$letra";
    }
}
