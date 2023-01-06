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
        Schema::create('task_materials', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->unsignedBigInteger('task_id')->nullable();
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('item_id')->references('id')->on('inventory_items')->onDelete('cascade');

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
        Schema::dropIfExists('task_materials');
    }
};
