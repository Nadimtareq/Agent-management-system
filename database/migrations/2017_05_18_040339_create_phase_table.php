<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('summary');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
       

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
        Schema::dropIfExists('phase');
    }
}
