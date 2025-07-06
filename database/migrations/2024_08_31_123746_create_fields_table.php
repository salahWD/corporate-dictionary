<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('fields', function (Blueprint $table) {
      $table->id();
      $table->string("title");
      $table->text("overview");
      // $table->string("image");
      $table->foreignId('parent_id')->onDelete('cascade')->nullable();

      $table->foreign('parent_id')->references('id')->on('fields');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('fields');
  }
};
