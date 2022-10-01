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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id('PesID');
            $table->string('PesNome');
            $table->string('PesCPF', 14);
            $table->string('PesPhone', 15);
            $table->string('PesCEP', 10);
            $table->string('PesEndereco', 250);
            $table->foreignId('PesComumID');
            $table->dateTime('PesCreatedAt');
            $table->dateTime('PesUpdatedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
};
