<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_id')->unique();
            $table->string('type_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('mi_name');
            $table->string('tin')->nullable();
            $table->string('ownerform')->nullable();
            $table->string('address')->nullable();
            $table->string('barangay_id')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('telephone')->nullable();
            $table->string('loc_lot')->nullable();
            $table->string('loc_blk')->nullable();
            $table->string('loc_street')->nullable();
            $table->string('loc_brgy')->nullable();
            $table->string('tct')->nullable();
            $table->string('taxdec')->nullable();
            $table->integer('scope_id')->nullable();
            $table->string('useofoccupancy')->nullable();
            $table->integer('storeys')->nullable();
            $table->integer('floorarea')->nullable();
            $table->string('cost')->nullable();
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->timestamp('accepted_date')->nullable();
            $table->timestamp('building_approval_date')->nullable();
            $table->timestamp('civil_approval_date')->nullable();
            $table->timestamp('electrical_approval_date')->nullable();
            $table->timestamp('electronics_approval_date')->nullable();
            $table->timestamp('mechanical_approval_date')->nullable();
            $table->timestamp('plumbing_approval_date')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->integer('category_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permits');
    }
}
