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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name');
            $table->text('pro_description');
            $table->text('reply')->default(0);
            $table->string('email');
            $table->integer('phone_number');
            $table->string('ref_number',50)->nullable();
            $table->foreignId('agent_id')->constrained('users')->onDelete('cascade');
            $table->integer('status')->default(0);
            $table->boolean('open_status')->default(0);
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
        Schema::dropIfExists('tickets');
    }
};
