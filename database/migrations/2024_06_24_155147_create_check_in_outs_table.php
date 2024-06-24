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
        Schema::create('check_in_outs', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->date('checin');
            $table->date('checkout')->nullable();
            $table->integer('hotel_id');
            $table->integer('room_id');
            $table->string('from')->default('general');
            $table->integer('user_id');
            $table->string('name');
            $table->string('phone');
            $table->integer('count');
            $table->decimal('total',15,2);
            $table->string('pay_type');
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
        Schema::dropIfExists('check_in_outs');
    }
};
