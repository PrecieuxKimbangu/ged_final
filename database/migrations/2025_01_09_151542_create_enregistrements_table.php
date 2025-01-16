<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnregistrementsTable extends Migration
{
    public function up()
    {
        Schema::create('enregistrements', function (Blueprint $table) {
            $table->id('id_enregistrement');
            $table->text('description');
            $table->string('piece_jointe');
            $table->string('chemin');
            $table->foreignId('courrier_id')->constrained('courriers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enregistrements');
    }
}
