<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique(); // e.g. Keyboard, Laptop
      $table->timestamps();
    });

    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->text('description')->nullable();
      $table->decimal('price', 8, 2);
      $table->string('attribute')->nullable();
      $table->unsignedInteger('stock');
      $table->unsignedBigInteger('category_id')->nullable();
      $table->string('brand')->nullable();
      $table->timestamps();
      $table->foreign('category_id')
        ->references('id')
        ->on('categories')
        ->onDelete('cascade');
    });
    DB::table('categories')->insert([
      ['name' => 'Keyboard', 'created_at' => now(), 'updated_at' => now()],
      ['name' => 'Laptop', 'created_at' => now(), 'updated_at' => now()],
    ]);
    DB::table('products')->insert([
      'name' => 'Aula78',
      'description' => 'A mechanical keyboard is a type of keyboard that uses mechanical switches to create the keys.',
      'price' => 100.00,
      'attribute' => 'Mechanical',
      'stock' => 10,
      'category_id' => 1,
      'brand' => 'Logitech',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
