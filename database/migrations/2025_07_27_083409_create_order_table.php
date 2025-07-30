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
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->decimal('total_price', 10, 2);
      $table->enum('status', ['pending', 'paid', 'shipped', 'delivered', 'canceled'])->default('pending');
      $table->string('payment_method')->nullable(); // e.g. 'cash', 'card'
      $table->timestamps();

      // Foreign key constraint
      $table->foreign('user_id')
        ->references('id')
        ->on('users')
        ->onDelete('cascade');
    });
    DB::table('orders')->insert([
      'user_id' => 1,
      'total_price' => 100.00,
      'status' => 'pending',
      'payment_method' => 'KHQR',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('orders');
  }
};
