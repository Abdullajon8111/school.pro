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
        Schema::create('a_school_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\ASchool::class)->index();
            $table->foreignIdFor(\App\Models\SClass::class)->index();
            $table->integer('boys_count');
            $table->integer('girls_count');
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
        Schema::dropIfExists('a_school_classes');
    }
};
