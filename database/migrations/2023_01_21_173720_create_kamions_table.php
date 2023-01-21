<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamions', function (Blueprint $table) {
            $table->id();
            $table->string('reg_broj');
            $table->integer('kilometraza');
            $table->string('marka');
            $table->foreignId('vozac_id')->constrained('vozacs');
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
        Schema::dropIfExists('kamions');
    }
}
