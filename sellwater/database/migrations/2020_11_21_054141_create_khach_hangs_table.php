<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loai_do_id')->nullable(false);
            $table->string('ten_khach_hang');
            $table->string('no_dung');
            $table->dateTime('ngay_nhan');
            $table->dateTime('ngay_hen');
            $table->integer('gia');
            $table->boolean('giao')->default(false);

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
        Schema::dropIfExists('khach_hangs');
    }
}
