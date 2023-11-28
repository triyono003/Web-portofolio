<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create("visitors", function (Blueprint $table) {
      $table->id();
      $table->string("desktop")->nullable(false);
      $table->string("tablet")->nullable(false);
      $table->string("phone")->nullable(false);
      $table->string("browser")->nullable(false);
      $table->string("vbrowser")->nullable(false);
      $table->string("clientip")->nullable(false);
      $table->string("platform")->nullable(false);
      $table->string("vplatform")->nullable(false);
      $table->string("robot")->nullable(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("visitors");
  }
};
