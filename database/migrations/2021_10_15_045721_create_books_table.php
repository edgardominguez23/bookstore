<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',500)->nullable();
            $table->string('author',250)->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('editorial',250)->nullable();
            $table->string('lenguage',100)->nullable();
            $table->string('description',500)->nullable();
            $table->string('picture',250)->nullable();
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
        Schema::dropIfExists('books');
    }
}
