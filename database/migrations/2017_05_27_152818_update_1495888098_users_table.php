<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1495888098UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'mobile')) {
                $table->dropColumn('mobile');
            }
            
        });
Schema::table('users', function (Blueprint $table) {
            $table->integer('mobile')->nullable();
                
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
            $table->dropColumn('mobile');
            
        });
Schema::table('users', function (Blueprint $table) {
                        $table->integer('mobile')->nullable();
                
        });

    }
}
