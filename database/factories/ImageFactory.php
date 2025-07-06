<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory {
  public function definition() {
    return [
      "file" => "https://via.placeholder.com/600",
      "title" => fake()->title(),
    ];
  }

  public function company($id) {
    return $this->state(fn (array $attributes) => [
      "company_id" => $id,
    ]);
  }
}
