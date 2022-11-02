<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('show')->default(false);
            $table->string('pseudoId')->unique();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('clearVIN')->nullable();
            $table->string('year')->nullable();
            $table->string('capacity')->nullable();
            $table->string('power')->nullable();
            $table->string('gearbox')->nullable();
            $table->string('color')->nullable();
            $table->string('VIN')->nullable();
            $table->string('mileage')->nullable();
            $table->string('drive')->nullable();
            $table->string('specification')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('guaranteeYear')->nullable();
            $table->json('photosGeneralOut')->nullable();
            $table->json('photosGeneralIn')->nullable();
            $table->string('smells')->nullable();
            $table->json('photosVIN')->nullable();
            $table->json('photosDocks')->nullable();
            $table->string('tiresYear')->nullable();
            $table->string('tiresBrand')->nullable();
            $table->string('tiresStatus')->nullable();
            $table->json('photosTires')->nullable();
            $table->json('paintedParts')->nullable();
            $table->json('badParts')->nullable();
            $table->json('badPartsOut')->nullable();
            $table->json('badPartsIn')->nullable();
            $table->string('price')->nullable();
            $table->json('equipment')->nullable();
            $table->string('equipmentStatus')->nullable();
            $table->json('video')->nullable();
            $table->text('allDefects')->nullable();
            $table->text('last')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
