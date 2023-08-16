<?php

namespace Assist\Case\Database\Seeders;

use Illuminate\Database\Seeder;
use Assist\Case\Models\CaseItemType;

class CaseItemTypeSeeder extends Seeder
{
    public function run(): void
    {
        CaseItemType::factory()
            ->count(13)
            ->sequence(
                ['name' => 'Admissions'],
                ['name' => 'Advising'],
                ['name' => 'ESL'],
                ['name' => 'Financial'],
                ['name' => 'Health'],
                ['name' => 'Holds'],
                ['name' => 'International'],
                ['name' => 'Other Support'],
                ['name' => 'Student Progress'],
                ['name' => 'Recruitment'],
                ['name' => 'Technology'],
                ['name' => 'Tutoring'],
                ['name' => 'Veterans'],
            )
            ->create();
    }
}