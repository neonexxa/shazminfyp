<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('p_id');
            $table->string('med_name');
            $table->string('hosp');            
            $table->string('doctor');
            $table->string('doc_spec');
            $table->string('disease');
            $table->string('desc');
            $table->string('f_allergy');
            $table->string('m_allergy');            
            $table->string('pres');
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
        Schema::dropIfExists('medicals');
    }
}
