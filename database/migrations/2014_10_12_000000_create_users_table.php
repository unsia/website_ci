<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('born_place')->nullable();
            $table->date('born_date')->nullable();
            $table->text('stay_address')->nullable();
            $table->unsignedBigInteger('id_kabupaten')->nullable();
            $table->unsignedBigInteger('id_provinsi')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('url_image', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
