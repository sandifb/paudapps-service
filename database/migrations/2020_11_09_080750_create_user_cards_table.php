<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('Creator');
            $table->unsignedBigInteger('card_cover_id')->default(1);
            $table->string('caption')->nullable();
            $table->tinyInteger('is_protect')->default(0)->comment('1Protect');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('card_cover_id')->references('id')->on('card_covers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_cards');
    }
}
