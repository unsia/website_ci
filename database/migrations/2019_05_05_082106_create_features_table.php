<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_parent');
            $table->string('name');
            $table->text('description');
            $table->string('menu_type')->default('menu');
            $table->string('slug')->unique();
            $table->string('route_name')->unique();
            $table->string('prefix_permission')->unique();
            $table->text('icon')->nullable();
            $table->string('icon_type')->default('class');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('fearutes');
    }
}
