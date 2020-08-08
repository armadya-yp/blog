<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acomments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi',255);
            $table->date('tgl_buat');
            $table->unsignedBigInteger('a_id');
            $table->foreign('a_id')->reference('id')->on('answers');
            $table->unsignedBigIngteger('profil_id');
            $table->foreign('profil_id')->reference('id')->on('profils');
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
        Schema::dropIfExists('acomments');
    }
}
