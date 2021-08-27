<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('designation');
            $table->string('department');
            $table->integer('contactnumber');
            $table->integer('employeeid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('designation');
            $table->dropColumn('department');
            $table->dropColumn('contactnumber');
            $table->dropColumn('employeeid');
        });
    }
}
