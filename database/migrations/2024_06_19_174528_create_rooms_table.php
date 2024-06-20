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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('hotel_id');
            $table->integer('buil_id');
            $table->string('cate')->default('air');
            $table->string('type')->default('one');
            $table->string('name');
            $table->decimal('price',15,2)->default('0');
            $table->string('img')->nullable();
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
        Schema::dropIfExists('rooms');
    }
};
