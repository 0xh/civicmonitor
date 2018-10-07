<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
    
             $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->json('other_names')->nullable();
            $table->string('email');
            $table->string('gender');
            $table->date('birth-date');
            $table->date('death-date')->nullable();
            $table->string('image')->nullable();
            $table->string('cover-image')->nullable();
            $table->text('summary')->nullable();
            $table->text('biography')->nullable();
            $table->string('national_identity')->nullable();
            $table->json('contact_details')->nullable();
            $table->json('links')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
