<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alikes', function (Blueprint $table) {
            $table->unsignedBigInteger('a_id');
            $table->foreign('a_id')->reference('id')->on('answers');
            $table->unsignedinteger('profil_id');
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
        Schema::dropIfExists('alikes');
    }
}
