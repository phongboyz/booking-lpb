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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('dis_id');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('detail');
            $table->decimal('price',15,2)->default('0');
            $table->integer('dicount')->default('0');
            $table->string('promotion1')->nullable();
            $table->string('promotion2')->nullable();
            $table->string('promotion3')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->integer('rate')->default('0');
            $table->integer('status')->default('1');
            $table->integer('active')->default('1');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
