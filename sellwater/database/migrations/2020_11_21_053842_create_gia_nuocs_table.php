<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaNuocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gia_nuocs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nuoc_id')->nullable(false);
            $table->integer('gia_nuoc');
            $table->date('ngay_ap_dung');
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
        Schema::dropIfExists('gia_nuocs');
    }
}
