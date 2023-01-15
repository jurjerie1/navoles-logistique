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
            $table->integer('distence');
            $table->integer('reveue_tt');
            $table->integer('essence');
            $table->integer('peage');
            $table->integer('ammende');
            $table->integer('autre');
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
