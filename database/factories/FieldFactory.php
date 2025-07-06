<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Field>
 */
class FieldFactory extends Factory {

  public function definition() {
    return [
      'title' => fake()->title(),
    ];
  }

  public function parent($id) {
    return $this->state(fn (array $attributes) => [
      'parent_id' => $id,
    ]);
  }
}
