<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name =  $this->faker->words(2, true);
        $result =  [
            "name" => $name,
            "description" => $this->faker->text(),
            "original_name" => $name,
            "star" => $this->faker->randomFloat(2,0,10),
            "kinopoisk_rate" => $this->faker->randomFloat(2,0,10),
            "imbd_rate" => $this->faker->randomFloat(2,0,10),
            "year" => (int)$this->faker->year(),
            "picture_id" => null,
            "long" => null,
            "premiere" => $this->faker->dateTime(),
            "download_link" => null,
        ];
        var_dump($result);
        return $result;
    }
}
