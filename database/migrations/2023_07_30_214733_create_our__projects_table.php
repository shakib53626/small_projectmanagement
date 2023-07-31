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
        Schema::create('our__projects', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name')->nullable();
            $table->string('type')->nullable();
            $table->string('end_date')->nullable();
            $table->string('whatsapp_group_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('develop_by')->nullable();
            $table->string('project_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our__projects');
    }
};
