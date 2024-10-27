<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_applications', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone_no');
            $table->integer('id_index_no');
            $table->string('gender');
            $table->string('m_status');
            $table->string('county');
            $table->string('sub_county');
            $table->string('location');
            $table->string('postal_address');
            $table->string('parent_name');
            $table->string('parent_contact');
            $table->string('selection1');
            $table->string('selection2');
            $table->string('selection3');
            $table->string('prefered_intake');

            $table->string('result_slip');
            $table->string('birth_cert');
            $table->string('bank_slip');

            $table->integer('status')->default(0);

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
        Schema::dropIfExists('online_applications');
    }
}
