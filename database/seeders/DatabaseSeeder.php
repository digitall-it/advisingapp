<?php

/*
<COPYRIGHT>

    Copyright © 2016-2024, Canyon GBS LLC. All rights reserved.

    Advising App™ is licensed under the Elastic License 2.0. For more details,
    see https://github.com/canyongbs/advisingapp/blob/main/LICENSE.

    Notice:

    - You may not provide the software to third parties as a hosted or managed
      service, where the service provides users with access to any substantial set of
      the features or functionality of the software.
    - You may not move, change, disable, or circumvent the license key functionality
      in the software, and you may not remove or obscure any functionality in the
      software that is protected by the license key.
    - You may not alter, remove, or obscure any licensing, copyright, or other notices
      of the licensor in the software. Any use of the licensor’s trademarks is subject
      to applicable law.
    - Canyon GBS LLC respects the intellectual property rights of others and expects the
      same in return. Canyon GBS™ and Advising App™ are registered trademarks of
      Canyon GBS LLC, and we are committed to enforcing and protecting our trademarks
      vigorously.
    - The software solution, including services, infrastructure, and code, is offered as a
      Software as a Service (SaaS) by Canyon GBS LLC.
    - Use of this software implies agreement to the license terms and conditions as stated
      in the Elastic License 2.0.

    For more information or inquiries please visit our website at
    https://www.canyongbs.com or contact us via email at legal@canyongbs.com.

</COPYRIGHT>
*/

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Notification;
use AdvisingApp\Form\Database\Seeders\FormSeeder;
use AdvisingApp\Task\Database\Seeders\TaskSeeder;
use AdvisingApp\Team\Database\Seeders\TeamSeeder;
use AdvisingApp\Alert\Database\Seeders\AlertSeeder;
use AdvisingApp\Assistant\Database\Seeders\PromptSeeder;
use AdvisingApp\Division\Database\Seeders\DivisionSeeder;
use AdvisingApp\Prospect\Database\Seeders\ProspectSeeder;
use AdvisingApp\MeetingCenter\Database\Seeders\EventSeeder;
use AdvisingApp\Assistant\Database\Seeders\PromptTypeSeeder;
use AdvisingApp\Interaction\Database\Seeders\InteractionSeeder;
use AdvisingApp\Prospect\Database\Seeders\ProspectSourceSeeder;
use AdvisingApp\Prospect\Database\Seeders\ProspectStatusSeeder;
use AdvisingApp\Consent\Database\Seeders\ConsentAgreementSeeder;
use AdvisingApp\InventoryManagement\Database\Seeders\AssetSeeder;
use AdvisingApp\Analytics\Database\Seeders\AnalyticsResourceSeeder;
use AdvisingApp\Authorization\Console\Commands\SyncRolesAndPermissions;
use AdvisingApp\KnowledgeBase\Database\Seeders\KnowledgeBaseItemSeeder;
use AdvisingApp\ServiceManagement\Database\Seeders\ServiceRequestSeeder;
use AdvisingApp\Analytics\Database\Seeders\AnalyticsResourceSourceSeeder;
use AdvisingApp\KnowledgeBase\Database\Seeders\KnowledgeBaseStatusSeeder;
use AdvisingApp\KnowledgeBase\Database\Seeders\KnowledgeBaseQualitySeeder;
use AdvisingApp\Analytics\Database\Seeders\AnalyticsResourceCategorySeeder;
use AdvisingApp\KnowledgeBase\Database\Seeders\KnowledgeBaseCategorySeeder;
use AdvisingApp\ServiceManagement\Database\Seeders\ChangeRequestTypeSeeder;
use AdvisingApp\ServiceManagement\Database\Seeders\ServiceRequestTypeSeeder;
use AdvisingApp\ServiceManagement\Database\Seeders\ChangeRequestStatusSeeder;
use AdvisingApp\Application\Database\Seeders\ApplicationSubmissionStateSeeder;
use AdvisingApp\ServiceManagement\Database\Seeders\ServiceRequestStatusSeeder;
use AdvisingApp\ServiceManagement\Database\Seeders\ServiceRequestUpdateSeeder;
use AdvisingApp\InventoryManagement\Database\Seeders\MaintenanceProviderSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Reduce notifications sent during seeding
        Notification::fake();

        $currentTenant = Tenant::current();

        Artisan::call(
            command: SyncRolesAndPermissions::class,
            parameters: [
                '--tenant' => $currentTenant->id,
            ],
            outputBuffer: $this->command->getOutput(),
        );

        $this->call([
            SisDataSeeder::class,
            SuperAdminProfileSeeder::class,
            UsersTableSeeder::class,
            DivisionSeeder::class,
            ServiceRequestStatusSeeder::class,
            ServiceRequestTypeSeeder::class,
            ProspectStatusSeeder::class,
            ProspectSourceSeeder::class,
            KnowledgeBaseCategorySeeder::class,
            KnowledgeBaseQualitySeeder::class,
            KnowledgeBaseStatusSeeder::class,
            ...InteractionSeeder::metadataSeeders(),
            ConsentAgreementSeeder::class,
            PronounsSeeder::class,

            ServiceRequestSeeder::class,
            ServiceRequestUpdateSeeder::class,
            ProspectSeeder::class,
            KnowledgeBaseItemSeeder::class,
            TaskSeeder::class,
            FormSeeder::class,
            AlertSeeder::class,
            TeamSeeder::class,
            // EngagementSeeder::class,
            // EngagementResponseSeeder::class,
            // DemoEducatableEngagementSeeder::class,
            SuperAdminSeeder::class,
            StudentSeeder::class,
            ApplicationSubmissionStateSeeder::class,
            EventSeeder::class,

            // InventoryManagement
            ...AssetSeeder::metadataSeeders(),
            AssetSeeder::class,

            MaintenanceProviderSeeder::class,
            AnalyticsResourceSourceSeeder::class,
            AnalyticsResourceCategorySeeder::class,
            AnalyticsResourceSeeder::class,

            // Change Request
            ChangeRequestTypeSeeder::class,
            ChangeRequestStatusSeeder::class,

            PromptTypeSeeder::class,
            PromptSeeder::class,
        ]);
    }
}
