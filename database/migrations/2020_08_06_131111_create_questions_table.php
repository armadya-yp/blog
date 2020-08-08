<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 100);
            $table->string('isi', 100);
            $table->date('tgl_buat');
            $table->date('tgl_update');
            $table->unsignedBigInteger('correct_id');
            $table->foreign('correct_id')->reference('id')->on('answers');
            $table->unsignedBigInteger('profil_id');
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
        Schema::dropIfExists('questions');
    }
}
