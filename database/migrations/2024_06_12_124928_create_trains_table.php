<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *  
     *  CREATE TABLE 'trains' (
     *  'id' UNSIGNED BIGINT NOT NULL AUTO_INCREMENT,
     *  'agency' VARCHAR(255) NOT NULL,
     *  'departure_station' VARCHAR(255) NOT NULL,
     *  'arrival_station' VARCHAR(255) NOT NULL,
     *  'departure_time' TIME NOT NULL,
     *  'arrival_time' TIME NOT NULL,
     *  'train_code' VARCHAR(30) NOT NULL,
     *  'price' DECIAML (10,2) UNSIGNED NOT NULL,
     *  'carriage_amount' SMALLINT UNSIGNED NOT NULL,
     *  'on_time' TINYINT NOT NULL DEFAULT(1),
     *  'cancelled' TINYINT NOT NULL DEFAULT(0),
     *  'created_at' TIMESTAMP NULL,
     *  'updated_at' TIMESTAMP NULL,
     *  PRIMARY KEY ('id')
     *  
     *  );
     * 
     * 
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->decimal('price', 6, 2);
            $table->smallInteger('carriage_amount');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
