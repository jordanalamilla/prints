<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prints', function (Blueprint $table) {
            $table->increments('id');

            # FOREIGN KEY TO PROJECT
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            $table->integer( 'available' );
            $table->string( 'size' );
            $table->float( 'price', 3, 2 );
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
        Schema::dropIfExists('prints');
    }
}
