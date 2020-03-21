<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // DB::statement("create table movies(
        //                 id int(20) AUTO_INCREMENT primary key,
        //                 title varchar(100),
        //                 year varchar(4),
        //                 director varchar(64),
        //                 poster varchar(250),
        //                 rented boolean not null default false,
        //                 synopsis text,
        //                 timestamps()
        //                 )");

        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('year', 0);
            $table->string('rating', 0);
            $table->string('director', 64);
            $table->string('poster', 250);
            $table->boolean('rented')->default(false);
            $table->text('synopsis');
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
        Schema::dropIfExists('movies');
    }
}
