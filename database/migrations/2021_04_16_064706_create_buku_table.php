<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id("id_buku");
            $table->string("judul_buku")->nullable(false);
            $table->string("kategori")->nullable(false);
            $table->string("penerbit")->nullable(false);
            $table->string("pengarang")->nullable(false);
            $table->integer("jumlah")->nullable(false);
            $table->string("status")->nullable(false);
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
        Schema::dropIfExists('buku');
    }
}
