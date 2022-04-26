<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moms', function (Blueprint $table) {
            $table->id("mom_id");
            $table->integer("mom_no");
            $table->string("mom_jobside");
            $table->string("mom_meeting");
            $table->string("mom_jenis_meeting");
            $table->string("mom_tempat");
            $table->string("mom_link");
            $table->date("mom_tanggal_dan_waktu");
            $table->time("mom_waktu_mulai");
            $table->time("mom_waktu_selesai");
            $table->string("mom_pemimpin");
            $table->string("mom_notulen");
            $table->string("mom_snack");
            $table->string("mom_agenda");
            $table->string("mom_notes");
            $table->string("mom_peserta");
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
        Schema::dropIfExists('moms');
    }
}
