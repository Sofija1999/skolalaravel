<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSkolasAddDirektorColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skolas', function (Blueprint $table) {
            $table->after('email', function ($table) {
                $table->string('direktor');
            });
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
            $table->dropColumn('direktor');
        });
    }
}
