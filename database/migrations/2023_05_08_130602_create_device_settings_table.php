<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id');
            $table->string('key',127)->index();
            $table->string('value',255);
            $table->dateTime('changed')->useCurrent();
            $table->dateTime('loaded')->nullable();
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
        Schema::dropIfExists('device_settings');
    }
}
