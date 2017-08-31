<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspecitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospecit', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('phase_id')->unsigned();
             $table->string('client_name');
             $table->string('address')->nullable();
             $table->string('pc_1')->nullable();
             $table->string('pc_2')->nullable();
             $table->string('pc_3')->nullable();
             $table->string('area');
             $table->text('remarks')->nullable();
             $table->text('demand')->nullable();
             $table->string('contact_person')->nullable();
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
        Schema::dropIfExists('prospecit');
    }
}
