<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalisationsTable extends Migration
{
    public function up()
    {
        Schema::create('journalisations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courrier_id')->constrained('courriers')->onDelete('cascade');
            $table->enum('action', ['create', 'update', 'delete']);
            $table->string('modifie_par');
            $table->text('commentaire')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journalisations');
    }
}
