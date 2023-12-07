<?php

include_once __DIR__ . '/../../../database/migrations/audits.stub';

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditsTestTable extends CreateAuditsTable
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        parent::up();

        Schema::table(config('audit.drivers.database.table', 'audits'), function (Blueprint $table) {
            $table->unsignedInteger('tenant_id')->nullable();
        });
    }
}
