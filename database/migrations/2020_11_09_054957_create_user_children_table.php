<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_children', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained('users');
            $table->string('child_name');
            $table->unsignedBigInteger('avatar_id')->default(1);
            $table->tinyInteger('age_level')->default(1)->comment('1(2-4) 2(5-8)');
            $table->tinyInteger('with_time')->default(0)->comment('1Active');
            $table->integer('time_seconds')->default(60);
            $table->timestamps();

            $table->foreign('avatar_id')->references('id')->on('avatars');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_children');
    }
}
