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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('position_id');
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin');
            $table->boolean('is_reservation_admin');
            $table->boolean('is_customer_admin');
            $table->boolean('is_menu_admin');
            $table->boolean('is_shift_admin');
            $table->date('joined_from_at');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
