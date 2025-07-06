<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  public function up() {
    Schema::create('companies', function (Blueprint $table) {
      $table->id();
      $table->string("title");
      $table->string("image")->nullable();
      $table->foreignId('parent_id')->onDelete('cascade')->nullable();
      $table->text("overview")->nullable();
      $table->foreignId("country_id");
      $table->foreignId("city_id")->nullable();
      $table->foreignId("neighborhood_id")->nullable();
      $table->string("address")->nullable();
      $table->string("phone")->nullable();
      $table->string("email")->nullable();
      $table->string("website")->nullable();
      $table->timestamps();

      $table->foreign('parent_id')->references('id')->on('companies');
      $table->foreign('country_id')->references('id')->on('countries');
      $table->foreign('city_id')->references('id')->on('cities');
      $table->foreign('neighborhood_id')->references('id')->on('neighborhoods');
    });
  }

  public function down() {
    Schema::dropIfExists('companies');
  }
};
