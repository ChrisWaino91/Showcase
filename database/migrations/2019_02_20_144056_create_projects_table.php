<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('language');
            $table->text('icon');
            $table->text('url');
            $table->text('git_url');

            $table->text('dependency_1')->nullable();
            $table->text('dependency_1_url')->nullable();
            $table->text('dependency_2')->nullable();
            $table->text('dependency_2_url')->nullable();
            $table->text('dependency_3')->nullable();
            $table->text('dependency_3_url')->nullable();
            $table->text('dependency_4')->nullable();
            $table->text('dependency_4_url')->nullable();
            $table->text('dependency_5')->nullable();
            $table->text('dependency_5_url')->nullable();

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
        Schema::dropIfExists('projects');
    }
}
