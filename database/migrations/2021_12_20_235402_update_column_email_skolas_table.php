<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnEmailSkolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skolas', function (Blueprint $table) {
            $table->renameColumn('email', 'skola_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skolas', function (Blueprint $table) {
            $table->renameColumn('skola_email', 'email');
        });
    }
}
