<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMnumtwoToKanohubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kanohubs', function (Blueprint $table) {
            $table ->string('mnumtwo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kanohubs', function (Blueprint $table) {
            $table->dropColumn('mnumtwo');
        });
    }
}
