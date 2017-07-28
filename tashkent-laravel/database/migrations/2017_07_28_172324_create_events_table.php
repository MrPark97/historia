<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->double('latitude', 15, 8);

            $table->double('longitude', 15, 8);

            $table->text('text_ru');
            $table->text('text_en');
            $table->text('text_de');
            $table->text('text_uz');

            $table->text('title_ru');
            $table->text('title_en');
            $table->text('title_de');
            $table->text('title_uz');

            $table->text('description_ru');
            $table->text('description_en');
            $table->text('description_de');
            $table->text('description_uz');

            $table->string('epoch_name');

            $table->date('creation_date');
            $table->date('destruction_date')->nullable();

            $table->integer('author_id');
            $table->integer('image_id');

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
        Schema::dropIfExists('events');
    }
}
