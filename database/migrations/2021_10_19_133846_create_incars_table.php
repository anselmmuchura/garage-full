<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incars', function (Blueprint $table) {
            $table->id();
            $table->string('incar');
            $table->foreignId('component_id')->constrained('components')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('service_id')->constrained('services')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('incars');
    }
}
