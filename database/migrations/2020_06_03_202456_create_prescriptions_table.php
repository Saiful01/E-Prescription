<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('prescription_id');
            $table->string('invoice_number');
            $table->unsignedBigInteger('patient_id'); //foreign key
            $table->string('patient_medicine_id');
            $table->string('patient_tests')->nullable();
            $table->string('chief_complains')->nullable();
            $table->string('investigations')->nullable();
            $table->string('objective_examinations')->nullable();
            $table->string('provisional_diagonosis')->nullable();
            $table->string('histories')->nullable();
            $table->longText('advise')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_paid')->default(false);
            $table->integer('amount')->default(0);
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
        Schema::dropIfExists('prescriptions');
    }
}
