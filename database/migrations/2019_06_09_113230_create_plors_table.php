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
            $table->string('object');
            $table->string('category');
            $table->string('smkp');
            $table->string('smk3');
            $table->string('ohsas');
            $table->string('iso');
            $table->string('begems');
            $table->string('approver');
            $table->string('status1')->nullable();
            $table->string('root')->nullable()->default('Belum diisi');
            $table->string('corrective')->nullable()->default('Belum diisi');
            $table->date('due_date1')->nullable();
            $table->string('pj1')->nullable()->default('Belum diisi');
            $table->string('eviden')->nullable()->default('Belum diisi');
            $table->string('preventive')->nullable()->default('Belum diisi');
            $table->date('due_date2')->nullable();
            $table->string('pj2')->nullable()->default('Belum diisi');
            $table->string('status2')->nullable()->default('Not yet Approved');
            $table->date('expired')->nullable();
            $table->string('reason')->nullable()->default('-');;
            $table->string('note')->nullable()->default('-');;
            $table->string('statusFinal')->nullable()->default('Open');
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
