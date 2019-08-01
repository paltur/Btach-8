<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votables', function (Blueprint $table) {
            $table->unsignedInteger('votable_id');
            $table->unsignedInteger('user_id');
            $table->string('votable_type');
            $table->tinyInteger('vote')->comment('1:up vote, -1:down vote');
            $table->timestamps();
            $table->unique(['votable_id','user_id','votable_type']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votables');
    }
}
