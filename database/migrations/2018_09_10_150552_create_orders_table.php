<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            # FORIEGN KEY TO USER
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            # FORIEGN KEY TO PRINT
            $table->unsignedInteger('print_id');
            $table->foreign('print_id')->references('id')->on('prints');

            $table->integer( 'amount' );
            $table->float( 'total', 5, 2 );

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
        Schema::dropIfExists('orders');
    }
}
