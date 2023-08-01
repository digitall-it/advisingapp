<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseItemsTable extends Migration
{
    public function up()
    {
        Schema::create('case_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('casenumber');
            $table->string('respondent_type')->nullable();
            $table->string('respondent_id')->nullable();
            $table->longText('close_details')->nullable();
            $table->longText('res_details')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
