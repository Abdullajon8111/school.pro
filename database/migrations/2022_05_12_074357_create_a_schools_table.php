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
            $table->foreignIdFor(\App\Models\SProvince::class, 'province')->index();
            $table->foreignIdFor(\App\Models\SDistrict::class, 'district')->index();
            $table->foreignIdFor(\App\Models\SLanguageType::class, 'language_type')->index();
            $table->foreignIdFor(\App\Models\STypeForeignLanguage::class, 'foreign_language')->index();
            $table->foreignIdFor(\App\Models\SSubject::class, 'subject_high')->index();
            $table->foreignIdFor(\App\Models\SLocationType::class, 'location_type')->index();
            $table->date('create_year');
            $table->date('update_year');

            $table->foreignIdFor(\App\Models\SInTurn::class, 'in_turn')->index();
            $table->foreignIdFor(\App\Models\SSchoolStatus::class, 'status')->index();

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
