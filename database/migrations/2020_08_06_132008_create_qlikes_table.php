<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQlikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qlikes', function (Blueprint $table) {
            $table->unsignedBigInteger('q_id');
            $table->foreign('q_id')->reference('id')->on('questions');
            $table->unsignedBiginteger('profil_id');
            $table->foreign('profil_id')->reference('id')->on('profils');
            $table->integer('poin');
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
        Schema::dropIfExists('qlikes');
    }
}
