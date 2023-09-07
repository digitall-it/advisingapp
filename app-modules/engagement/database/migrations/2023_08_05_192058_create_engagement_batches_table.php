<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('engagement_batches', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // TODO Figure out how we're going to identify the batches
            $table->string('identifier')->unique()->nullable();
            $table->foreignUuid('user_id')->constrained('users');
            // I've removed the constraint here, as that was causing issues in tests.
            $table->uuid('job_batch_id')->nullable();
            $table->timestamps();
        });
    }
};
