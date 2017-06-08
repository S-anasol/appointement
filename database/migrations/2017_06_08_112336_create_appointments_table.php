<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date');

            $table->string('company_name');
            $table->string('company_street');
            $table->string('company_house');
            $table->string('company_postal');
            $table->string('company_locality');
            $table->string('company_url');

            $table->string('contact_number');
            $table->string('contact_email');
            $table->string('contact_salutation');
            $table->string('contact_name');

            $table->string('result_note')->nullable();

            $table->enum('status', ['awaiting confirmation', 'confirmed', 'canceled', 'deleted', 'finished'])->default('awaiting confirmation');
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
        Schema::dropIfExists('appointements');
    }
}
