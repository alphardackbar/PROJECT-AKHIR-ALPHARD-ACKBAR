<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpmomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opmoms', function (Blueprint $table) {
            $table->id("mom_id");
            $table->string("mom_jobside");
            $table->string("mom_meeting");
            $table->string("mom_jenis_meeting");
            $table->string("mom_tempat");
            $table->string("mom_pemimpin");
            $table->string("mom_notulen");
            $table->string("mom_snack");
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
        Schema::dropIfExists('opmoms');
    }
}
