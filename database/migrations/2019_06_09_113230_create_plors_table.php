<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proposer')->nullable();
            $table->string('no_nc');
            $table->string('audit_period');
            $table->string('depcont');
            $table->string('site');
            $table->date('date');
            $table->string('auditor');
            $table->string('problem');
            $table->string('location');
            $table->string('category');
            $table->string('smkp');
            $table->string('smk3');
            $table->string('ohsas');
            $table->string('iso');
            $table->string('begems');
            $table->string('approver');
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
        Schema::dropIfExists('plors');
    }
}
