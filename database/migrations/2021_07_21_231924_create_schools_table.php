<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('schoolId')->unique();
            $table->string('schoolType');
            $table->string('schoolcategory');
            $table->string('province');
            $table->string('district');
            $table->string('zonalEducationOffice');
            $table->string('educationDivision');
            $table->string('schoolName');
            $table->string('address');
            $table->integer('telNo');
            $table->string('email');

            
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
        Schema::dropIfExists('schools');
    }
}
