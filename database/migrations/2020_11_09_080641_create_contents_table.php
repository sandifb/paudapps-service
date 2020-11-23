<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('Creator');
            $table->text('title');
            $table->string('code')->nullable();
            $table->string('thumbnail')->nullable();
            $table->tinyInteger('type')->comment('1Membaca, 2Menulis, 3Berhitung, 4Bercerita, 5Mengaji, 6KisahNabi, 7BahasaInggris, 8BahasaArab');
            $table->tinyInteger('is_free')->default(1)->comment('1Free');
            $table->tinyInteger('status')->default(1)->comment('1Draft, 2Request, 3Public, 4BlockirCR');
            $table->tinyInteger('status_monites')->default(0)->comment('1Active, 0NotActive');
            $table->integer('view')->default(0);
            $table->timestamps();

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
        Schema::dropIfExists('contents');
    }
}
