<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelPedram2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('model_pedram2s', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->default('j');
            $table->string('lname')->default('k');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('j');
            $table->rememberToken();
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
        Schema::dropIfExists('model_pedram2s');
    }
}
