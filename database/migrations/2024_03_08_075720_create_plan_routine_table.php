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
        Schema::create('plan_routine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->integer('day');
            $table->time('time');
            $table->string('muscle');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->timestamp('created_at')->default(now());
            $table->timestamp('udpated_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_routine');
    }
};
