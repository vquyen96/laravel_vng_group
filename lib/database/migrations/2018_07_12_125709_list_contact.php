<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_contact', function (Blueprint $table) {
            $table->increments('list_con_id');
            $table->string('list_con_name');
            $table->string('list_con_email');
            $table->string('list_con_content');
            $table->integer('list_con_status');
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
        Schema::dropIfExists('list_contact');
    }
}
