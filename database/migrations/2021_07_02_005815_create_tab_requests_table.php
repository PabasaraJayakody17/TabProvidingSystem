<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned()->nullable();
            $table->string('district')->nullable();
            $table->string('zonalEducationOffice')->nullable();
            $table->string('schoolName')->nullable();
            $table->string('student_or_teacher')->nullable();
            $table->integer('grade')->nullable();
            $table->integer('telNo')->nullable();
          //  $table->string('emailAddress');
            $table->string('postalAddress')->nullable();
            $table->string('reason')->nullable();
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_requests');
    }
}
