<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('zones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zone_name');
            $table->decimal('cost', 15, 2);
            $table->string('rider')->nullable();
            $table->string('drop_off')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('zones');
    }

}
