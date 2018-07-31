<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'users', function( Blueprint $table ) {
            $table->string( 'address' )->after('password');
            $table->string( 'city' )->after('address');
            $table->string( 'province' )->after('city');
            $table->string( 'postal_code' )->after('province');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table( 'users', function( Blueprint $table ) {
            $table->dropColumn( 'address' );
            $table->dropColumn( 'city' );
            $table->dropColumn( 'province' );
            $table->dropColumn( 'postal_code' );
        });
    }
}
