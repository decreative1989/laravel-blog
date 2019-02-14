<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_album', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('gallery_id');
            $table->string('title', 100);
            $table->string('slug', 100)->unique();
            $table->string('image', 100);
            $table->boolean('disable')->default(false);
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_album');
    }
}
