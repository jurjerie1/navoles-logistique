<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('dPays');
            $table->string('dVille');
            $table->string('dEntreprise');
            $table->string('aPays');
            $table->string('aVille');
            $table->string('aEntreprise');
            $table->integer('distence')->nullable();
            $table->integer('reveue_tt')->nullable();
            $table->integer('essence')->nullable();
            $table->integer('peage')->nullable();
            $table->integer('ammende')->nullable();
            $table->integer('status')->nullable();
            $table->integer('autre')->nullable();
            $table->string('commentaire')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('entreprise_id')->constrained();
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
        Schema::dropIfExists('missions');
    }
};
