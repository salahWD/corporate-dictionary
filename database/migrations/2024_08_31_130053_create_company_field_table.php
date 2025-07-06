<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_field', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->onDelete('cascade');
            $table->foreignId('field_id')->onDelete('cascade');

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('field_id')->references('id')->on('fields');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_field');
    }
};
