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
        Schema::create('police_details', function (Blueprint $table) {
            $table->id();
            $table->integer('phone');
            $table->string('ref_number')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('province');
            $table->string('district');
            $table->string('division');
            $table->string('address');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('police_details');
    }
};
