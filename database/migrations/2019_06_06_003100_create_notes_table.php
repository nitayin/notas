<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->Increments('idnotes');
            $table->integer('first_partial');
            $table->integer('second_partial');
            $table->integer('third_partial');
            $table->integer('final_note');
            
            $table->integer('subjects_idsubjects')->unsigned();
            $table->foreign('subjects_idsubjects')
            ->references('idsubjects')
            ->on('subjects')
            ->onDelete('cascade');

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
        Schema::dropIfExists('notes');
    }
}
