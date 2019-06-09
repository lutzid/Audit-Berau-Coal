<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencanas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proposer')->nullable();
            $table->string('isps_scope');
            $table->string('isps_content');
            $table->date('isps_from');
            $table->date('isps_to');
            $table->string('isps_remaks');
            $table->string('special_scope');
            $table->string('special_content');
            $table->date('special_from');
            $table->date('special_to');
            $table->string('special_remaks');
            $table->string('smt1_scope');
            $table->string('smt1_content');
            $table->date('smt1_from');
            $table->date('smt1_to');
            $table->string('smt1_remaks');
            $table->string('smt2_scope');
            $table->string('smt2_content');
            $table->date('smt2_from');
            $table->date('smt2_to');
            $table->string('smt2_remaks');
            $table->string('siap_scope');
            $table->string('siap_content');
            $table->date('siap_from');
            $table->date('siap_to');
            $table->string('siap_remaks');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('rencanas');
    }
}
