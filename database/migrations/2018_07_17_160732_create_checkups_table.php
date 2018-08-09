<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cek_date');
            $table->string('cek_id');
            $table->string('cek_name');
            $table->string('cek_address');            
            $table->string('cek_age');
            $table->string('cek_phone');
            $table->string('cek_hospital');
            $table->string('cek_weight');
            $table->string('cek_height');            
            $table->string('cek_bmi');
            $table->string('cek_bp');
            $table->string('cek_bone');
            $table->string('cek_blood');
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
        Schema::dropIfExists('checkups');
    }
}
