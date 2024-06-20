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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->date('checin');
            $table->date('checkout');
            $table->string('name');
            $table->string('phone');
            $table->string('pay_type');
            $table->decimal('total',15,2);
            $table->string('img')->nullable();
            $table->integer('status')->default('1');
            $table->integer('approve_id')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
