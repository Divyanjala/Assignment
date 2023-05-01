<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_plan_shedules', function (Blueprint $table) {
            $table->id();
            $table->text('task')->nullable();
            $table->string('date')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('health_plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_plan_shedules');
    }
};
