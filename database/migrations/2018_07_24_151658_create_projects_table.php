<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            
            #DETAILS
            $table->increments('id');
            $table->string( 'title' );
            $table->mediumText( 'description' );
            $table->string( 'media' );
            $table->string( 'image' );
            $table->string( 'creation_date' );

            #PRINT
            $table->integer( 'prints_available' );
            $table->string( 'print_size' );
            $table->float( 'print_price', 3, 2 );

            #ORIGINAL
            $table->boolean( 'original_available' )->default( false );
            $table->string( 'original_size' )->nullable( $value = true );
            $table->float( 'original_price', 3, 2 )->nullable( $value = true );

            #TIMESTAMPS
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
        Schema::dropIfExists('projects');
    }
}
