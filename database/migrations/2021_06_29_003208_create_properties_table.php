<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->string('property_title');
            $table->text('property_description');
            $table->text('location');
            $table->string('state');
            $table->string('city');
            $table->Integer('floor')->nullable();
            $table->Integer('beds')->nullable();
            $table->Integer('baths')->nullable();
            $table->String('purpose')->nullable();
            $table->double('land_area')->nullable();
            $table->text('contact_no')->nullable();
            $table->string('thumbnail');
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
        Schema::dropIfExists('properties');
    }
}
