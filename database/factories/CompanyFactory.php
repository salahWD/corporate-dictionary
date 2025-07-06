<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{

  public function definition(): array
  {
    return [
      'title' => fake()->name(),
      'overview' => fake()->paragraph(),
    ];
  }

  public function configure(): static
  {
    return $this->afterCreating(function ($company) {
      Address::factory()->company($company->id)->create();
    });
  }

  public function parent($id): static
  {
    return $this->state(fn (array $attributes) => [
      'parent_id' => $id,
    ]);
  }

}
