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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru');
            $table->string('title_ua');
            $table->string('title_for_banner_ru');
            $table->string('title_for_banner_ua');
            $table->string('img_for_banner');
            $table->text('description_ru');
            $table->text('description_ua');
            $table->boolean('is_banner');
            $table->foreignId('type_service_id');
            $table->text('content_ru');
            $table->text('content_ua');
            $table->string('img_for_content');
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
        Schema::dropIfExists('services');
    }
};
