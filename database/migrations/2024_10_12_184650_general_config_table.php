<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('general_config', function (Blueprint $table) {
            $table->id();
            $table->boolean('show_userPhoto');//En show.blade
            $table->boolean('show_userName');//En show.blade
            $table->boolean('show_headerMenssage');
            $table->string('headerMenssage');
            $table->string('default_image_post');
            $table->string('default_profile_image');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_config');
    }
};
