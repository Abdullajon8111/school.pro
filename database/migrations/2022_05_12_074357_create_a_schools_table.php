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
        Schema::create('a_schools', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignIdFor(\App\Models\SProvince::class)->index();
            $table->foreignIdFor(\App\Models\SDistrict::class)->index();
            $table->foreignIdFor(\App\Models\SLanguageType::class)->index();
            $table->foreignIdFor(\App\Models\STypeForeignLanguage::class)->index();
            $table->foreignIdFor(\App\Models\SSubject::class)->index();
            $table->foreignIdFor(\App\Models\SLocationType::class)->index();
            $table->date('create_year');
            $table->date('update_year');

            $table->foreignIdFor(\App\Models\SInTurn::class)->index();
            $table->foreignIdFor(\App\Models\SSchoolStatus::class)->index();

            $table->string('comment')->nullable();

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
        Schema::dropIfExists('a_schools');
    }
};
