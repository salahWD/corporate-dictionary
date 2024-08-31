<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;
use App\Models\Country;
use App\Models\City;
use App\Models\Neighborhood;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory {

  public function definition() {
    return [
      "country_id" => Country::factory(),
      "city_id" => City::factory(),
      "neighborhood_id" => Neighborhood::factory(),
    ];
  }

  public function company($id) {
    return $this->state(fn (array $attributes) => [
      "company_id" => $id
    ]);
  }
}
