<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

  public function run() {

    Company::factory()
      ->count(10)
      ->create();

  }
}
