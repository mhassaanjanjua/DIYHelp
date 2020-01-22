<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('get_services_id')->nullable();
            $table->unsignedBigInteger('offer_services_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('status');

            $table->index('get_services_id');
            $table->index('offer_services_id');
            $table->index('user_id');
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
        Schema::dropIfExists('service_applications');
    }
}
