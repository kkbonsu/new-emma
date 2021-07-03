<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->nullable();
            $table->string('room_type')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('area', 10, 2)->nullable();
            $table->tinyInteger('max_occupancy')->nullable();
            $table->tinyInteger('beds')->nullable();
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
            $table->softDeletes('deleted_at', 0);
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
        Schema::dropIfExists('rooms');
    }
}
