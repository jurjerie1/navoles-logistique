<?php

use Faker\Core\Uuid;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo')->nullable();
            $table->string('pseudoD')->nullable();
            $table->string('email')->unique();
            $table->string('tk')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('token')->default(0);
            $table->foreignId('entreprise_id')->constrained()->onDelete('cascade');
            $table->integer('role_et')->default(0);
            $table->rememberToken();
            $table->uuid('create_compte')->default();
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
        Schema::dropIfExists('users');
    }
};
