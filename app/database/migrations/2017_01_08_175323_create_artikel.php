<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('artikel', function($table)
        {
            $table->increments('id_artikel');
            $table->string('titel');
            $table->text('description');
            $table->image('image');
            $table->string('nummer');
            $table->foreign('id_cat')->references('id_category')->on('category');
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
        Schema::drop('artikel');

    }

}
