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
        Schema::create('medical_details', function (Blueprint $table) {
            $table->id();
            $table->date('birthday')->nullable();
            $table->string('hight')->nullable();
            $table->string('weight')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->string('em_address')->nullable();
            $table->string('cholestreol')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('mr_status')->nullable();
            $table->string('em_name')->nullable();
            $table->string('em_phone')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('medical_details');
    }
};
