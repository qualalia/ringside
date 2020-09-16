<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
        });
        DB::table('service_types')->insert([
            [ 'type' => 'Drop-in Class' ],
            [ 'type' => 'Session Class' ],
            [ 'type' => 'Private Lesson' ],
            [ 'type' => 'Space Reservation' ],
            [ 'type' => 'Troupe' ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_types');
    }
}
