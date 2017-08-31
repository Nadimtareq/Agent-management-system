<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prospecit', function (Blueprint $table) {
             $table->foreign('phase_id')->references('id')->on('phase')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('activities', function (Blueprint $table) {
             $table->foreign('prospecit_id')->references('id')->on('prospecit')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('timetable', function (Blueprint $table) {
             $table->foreign('prospecit_id')->references('id')->on('prospecit')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('phase', function (Blueprint $table) {
             $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation');
    }
}
