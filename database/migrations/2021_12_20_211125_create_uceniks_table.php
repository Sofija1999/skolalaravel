<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUceniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uceniks', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('adresa');
            $table->string('email');
            $table->foreignId('profesor_id')->constrained('profesors');
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
        Schema::dropIfExists('uceniks');
    }
}
