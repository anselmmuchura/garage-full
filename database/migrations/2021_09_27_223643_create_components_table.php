<?php

use App\Models\Vehicle;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('rear_view_mirror');
            $table->string('windshield');
            $table->string('air_conditioning_operation');
            $table->string('dash_board_instrumentation');
            $table->string('internal_lighting');
            $table->string('floor_carpeting');
            $table->string('tyre_condition');
            $table->string('spear_wheel');
            $table->string('toolkit');
            $table->string('radio');
            $table->foreignId('vehicle_id')->constrained('vehicles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('components');
    }
}