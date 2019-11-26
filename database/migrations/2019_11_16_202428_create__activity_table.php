<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_activity', function (Blueprint $table) {
            $table->increments('Ac_ID');
            $table->string('Ac_Name');
            $table->string('Ac_Type');
            $table->string('Ac_location');
            $table->date('Ac_DateStart');
            $table->date('Ac_DateFinish');
            $table->time('Ac_TimeStart');
            $table->time('Ac_TimeFinish');
            $table->string('Ac_member');
            $table->string('Ac_Organizer');
            $table->string('Ac_Tel');
            $table->string('Ac_Email');
            $table->string('Ac_Facbook');
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
        Schema::dropIfExists('_activity');
    }
}
