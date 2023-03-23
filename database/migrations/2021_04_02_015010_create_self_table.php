<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('head_portrait')->default('');
            $table->string('expected_position')->default('');
            $table->boolean('sex');
            $table->integer('age');
            $table->decimal('working_years');
            $table->string('we_chat')->default('');
            $table->string('phone')->default('');
            $table->text('education');
            $table->text('self_evaluation');
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
        Schema::dropIfExists('self');
    }
}
