<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1495886385UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('referred_id')->unsigned()->nullable();
                $table->foreign('referred_id', '40503_59296a311b0d6')->references('id')->on('users')->onDelete('cascade');
                
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('40503_59296a311b0d6');
            $table->dropIndex('40503_59296a311b0d6');
            $table->dropColumn('referred_id');
            
        });

    }
}
