<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name')->unique();
            $table->text('description')->nullable();

            $table->foreignUuid('division_id')->nullable()->constrained('divisions');

            $table->timestamps();
            $table->softDeletes();
        });
    }
};
