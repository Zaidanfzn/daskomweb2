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
        Schema::table('laporan_pjs', function (Blueprint $table) {
            $table->foreign(['modul_id'])->references(['id'])->on('moduls')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporan_pjs', function (Blueprint $table) {
            $table->dropForeign('laporan_pjs_modul_id_foreign');
        });
    }
};
