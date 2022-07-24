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
        Schema::create('user_fines', function (Blueprint $table) {
            $table->id();
            $table->integer('licence_number');
            $table->foreignId('fine_id')->constrained('fines')->onDelete('cascade');
            $table->foreignId('police_id')->constrained('police_users');
            $table->double('amount', 2);
            $table->date('date');
            $table->date('expire_date');
            $table->integer('status')->default(0);
            $table->integer('licence_status')->default(0);
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
        Schema::dropIfExists('user_fines');
    }
};
