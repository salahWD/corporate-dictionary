<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  public function up() {
			Schema::create('companies', function (Blueprint $table) {
				$table->id();
        $table->string("title");
				$table->foreignId('parent_id')->onDelete('cascade')->nullable();
				$table->text("overview")->nullable();
				$table->timestamps();

        $table->foreign('parent_id')->references('id')->on('companies');
			});
    }

	public function down() {
		Schema::dropIfExists('companies');
	}
};
