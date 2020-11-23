<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('device_token')->nullable();
            $table->string('session_mobile', 40)->nullable();
            $table->string('session_web', 40)->nullable();
            $table->tinyInteger('role')->default(6)->comment('1Admin, 2Disdik, 3Yayasan, 4AdmSchool, 5Guru, 6User');
            $table->tinyInteger('level')->default(3)->comment('11Admin, 12Keuangan, 13Content, dst');
            $table->tinyInteger('blocked')->default(0)->comment('1Blocked');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
