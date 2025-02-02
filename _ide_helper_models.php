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

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\FailedImportRow
 *
 * @property string $id
 * @property array $data
 * @property string $import_id
 * @property string|null $validation_error
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import $import
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow query()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereImportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereValidationError($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperFailedImportRow {}
}

namespace App\Models{
/**
 * App\Models\HealthCheckResultHistoryItem
 *
 * @property int $id
 * @property string $check_name
 * @property string $check_label
 * @property string $status
 * @property string|null $notification_message
 * @property string|null $short_summary
 * @property array $meta
 * @property string $ended_at
 * @property string $batch
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCheckLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCheckName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereNotificationMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereShortSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HealthCheckResultHistoryItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperHealthCheckResultHistoryItem {}
}

namespace App\Models{
/**
 * App\Models\Import
 *
 * @property string $id
 * @property int|null $completed_at
 * @property string $file_name
 * @property string $file_path
 * @property string $importer
 * @property int $processed_rows
 * @property int $total_rows
 * @property int $successful_rows
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FailedImportRow> $failedRows
 * @property-read int|null $failed_rows_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $user
 * @method static \Illuminate\Database\Eloquent\Builder|Import newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Import newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Import query()
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereImporter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereProcessedRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereSuccessfulRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereTotalRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperImport {}
}

namespace App\Models{
/**
 * App\Models\NotificationSetting
 *
 * @property string $id
 * @property string $name
 * @property string|null $primary_color
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Division\Models\Division> $divisions
 * @property-read int|null $divisions_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\NotificationSettingPivot> $settings
 * @property-read int|null $settings_count
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting wherePrimaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSetting whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperNotificationSetting {}
}

namespace App\Models{
/**
 * App\Models\NotificationSettingPivot
 *
 * @property string $id
 * @property string $notification_setting_id
 * @property string $related_to_type
 * @property string $related_to_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $relatedTo
 * @property-read \App\Models\NotificationSetting $setting
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot whereNotificationSettingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot whereRelatedToId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot whereRelatedToType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationSettingPivot whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperNotificationSettingPivot {}
}

namespace App\Models{
/**
 * App\Models\Pronouns
 *
 * @property string $id
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Database\Factories\PronounsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Pronouns withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperPronouns {}
}

namespace App\Models{
/**
 * App\Models\SettingsProperty
 *
 * @property string $id
 * @property string $group
 * @property string $name
 * @property bool $locked
 * @property mixed $payload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsProperty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSettingsProperty {}
}

namespace App\Models{
/**
 * App\Models\SystemUser
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\RoleGroup> $roleGroups
 * @property-read int|null $role_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\RoleGroup> $traitRoleGroups
 * @property-read int|null $trait_role_groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Authenticatable permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|Authenticatable role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSystemUser {}
}

namespace App\Models{
/**
 * App\Models\Tenant
 *
 * @property string $id
 * @property string $name
 * @property string $domain
 * @property mixed|null $key
 * @property mixed|null $config
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Spatie\Multitenancy\TenantCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\Multitenancy\TenantCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperTenant {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property string $id
 * @property string|null $emplid
 * @property string|null $name
 * @property string|null $email
 * @property bool $is_email_visible_on_profile
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $locale
 * @property string|null $type
 * @property bool $is_external
 * @property string|null $bio
 * @property bool $is_bio_visible_on_profile
 * @property string|null $avatar_url
 * @property bool $are_teams_visible_on_profile
 * @property bool $is_division_visible_on_profile
 * @property string $timezone
 * @property bool $has_enabled_public_profile
 * @property string|null $public_profile_slug
 * @property bool $office_hours_are_enabled
 * @property bool $appointments_are_restricted_to_existing_students
 * @property array|null $office_hours
 * @property bool $out_of_office_is_enabled
 * @property \Illuminate\Support\Carbon|null $out_of_office_starts_at
 * @property \Illuminate\Support\Carbon|null $out_of_office_ends_at
 * @property string|null $phone_number
 * @property bool $is_phone_number_visible_on_profile
 * @property bool $working_hours_are_enabled
 * @property bool $are_working_hours_visible_on_profile
 * @property array|null $working_hours
 * @property string|null $pronouns_id
 * @property bool $are_pronouns_visible_on_profile
 * @property bool $default_assistant_chat_folders_created
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Task\Models\Task> $assignedTasks
 * @property-read int|null $assigned_tasks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Assistant\Models\AssistantChatFolder> $assistantChatFolders
 * @property-read int|null $assistant_chat_folders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Assistant\Models\AssistantChatMessageLog> $assistantChatMessageLogs
 * @property-read int|null $assistant_chat_message_logs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Assistant\Models\AssistantChat> $assistantChats
 * @property-read int|null $assistant_chats_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\MeetingCenter\Models\Calendar|null $calendar
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\CareTeam\Models\CareTeam> $careTeams
 * @property-read int|null $care_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\CaseloadManagement\Models\Caseload> $caseloads
 * @property-read int|null $caseloads_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ChangeRequestResponse> $changeRequestResponses
 * @property-read int|null $change_request_responses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ChangeRequestType> $changeRequestTypes
 * @property-read int|null $change_request_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ChangeRequest> $changeRequests
 * @property-read int|null $change_requests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Consent\Models\ConsentAgreement> $consentAgreements
 * @property-read int|null $consent_agreements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InAppCommunication\Models\TwilioConversation> $conversations
 * @property-read int|null $conversations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\EngagementBatch> $engagementBatches
 * @property-read int|null $engagement_batches_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\Engagement> $engagements
 * @property-read int|null $engagements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\CalendarEvent> $events
 * @property-read int|null $events_count
 * @property-read mixed $is_admin
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\License> $licenses
 * @property-read int|null $licenses_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Pronouns|null $pronouns
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Prospect\Models\Prospect> $prospectCareTeams
 * @property-read int|null $prospect_care_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Prospect\Models\Prospect> $prospectSubscriptions
 * @property-read int|null $prospect_subscriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\RoleGroup> $roleGroups
 * @property-read int|null $role_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestAssignment> $serviceRequestAssignments
 * @property-read int|null $service_request_assignments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\StudentDataModel\Models\Student> $studentCareTeams
 * @property-read int|null $student_care_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\StudentDataModel\Models\Student> $studentSubscriptions
 * @property-read int|null $student_subscriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Notification\Models\Subscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Team\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\RoleGroup> $traitRoleGroups
 * @property-read int|null $trait_role_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\AdvisingApp\Alert\Models\Alert[] $studentAlerts
 * @property-read int|null $student_alerts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\AdvisingApp\Alert\Models\Alert[] $prospectAlerts
 * @property-read int|null $prospect_alerts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\AdvisingApp\Authorization\Models\Permission[] $permissionsFromRoles
 * @property-read int|null $permissions_from_roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\AdvisingApp\ServiceManagement\Models\ServiceRequest[] $serviceRequests
 * @property-read int|null $service_requests_count
 * @method static \Illuminate\Database\Eloquent\Builder|User admins()
 * @method static \Illuminate\Database\Eloquent\Builder|User advancedFilter($data)
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Authenticatable permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|Authenticatable role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAppointmentsAreRestrictedToExistingStudents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereArePronounsVisibleOnProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAreTeamsVisibleOnProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAreWorkingHoursVisibleOnProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDefaultAssistantChatFoldersCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmplid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasEnabledPublicProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsBioVisibleOnProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsDivisionVisibleOnProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsEmailVisibleOnProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsExternal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsPhoneNumberVisibleOnProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOfficeHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOfficeHoursAreEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOutOfOfficeEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOutOfOfficeIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOutOfOfficeStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePronounsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePublicProfileSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWorkingHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWorkingHoursAreEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperUser {}
}

namespace AdvisingApp\Alert\Models{
/**
 * AdvisingApp\Alert\Models\Alert
 *
 * @property-read Student|Prospect $concern
 * @property string $id
 * @property string $concern_type
 * @property string $concern_id
 * @property string $description
 * @property \AdvisingApp\Alert\Enums\AlertSeverity $severity
 * @property \AdvisingApp\Alert\Enums\AlertStatus $status
 * @property string $suggested_intervention
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \AdvisingApp\Alert\Database\Factories\AlertFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Alert licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert query()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert status(\AdvisingApp\Alert\Enums\AlertStatus $status)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereConcernId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereConcernType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereSeverity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereSuggestedIntervention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alert withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Alert withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAlert {}
}

namespace AdvisingApp\Analytics\Models{
/**
 * AdvisingApp\Analytics\Models\AnalyticsResource
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string|null $url
 * @property bool $is_active
 * @property bool $is_included_in_data_portal
 * @property string|null $source_id
 * @property string $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\Analytics\Models\AnalyticsResourceCategory $category
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \AdvisingApp\Analytics\Models\AnalyticsResourceSource|null $source
 * @method static \AdvisingApp\Analytics\Database\Factories\AnalyticsResourceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereIsIncludedInDataPortal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereSourceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResource whereUrl($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAnalyticsResource {}
}

namespace AdvisingApp\Analytics\Models{
/**
 * AdvisingApp\Analytics\Models\AnalyticsResourceCategory
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property \AdvisingApp\Analytics\Enums\AnalyticsResourceCategoryClassification $classification
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Analytics\Models\AnalyticsResource> $resources
 * @property-read int|null $resources_count
 * @method static \AdvisingApp\Analytics\Database\Factories\AnalyticsResourceCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceCategory withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAnalyticsResourceCategory {}
}

namespace AdvisingApp\Analytics\Models{
/**
 * AdvisingApp\Analytics\Models\AnalyticsResourceSource
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Analytics\Models\AnalyticsResource> $resources
 * @property-read int|null $resources_count
 * @method static \AdvisingApp\Analytics\Database\Factories\AnalyticsResourceSourceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsResourceSource withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAnalyticsResourceSource {}
}

namespace AdvisingApp\Application\Models{
/**
 * AdvisingApp\Application\Models\Application
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property bool $embed_enabled
 * @property array|null $allowed_domains
 * @property string|null $primary_color
 * @property \AdvisingApp\Form\Enums\Rounding|null $rounding
 * @property bool $is_wizard
 * @property array|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationField> $fields
 * @property-read int|null $fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationStep> $steps
 * @property-read int|null $steps_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationSubmission> $submissions
 * @property-read int|null $submissions_count
 * @method static \AdvisingApp\Application\Database\Factories\ApplicationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereAllowedDomains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereEmbedEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereIsWizard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePrimaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereRounding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperApplication {}
}

namespace AdvisingApp\Application\Models{
/**
 * AdvisingApp\Application\Models\ApplicationAuthentication
 *
 * @property string $id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property string|null $code
 * @property string $application_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $author
 * @property-read \AdvisingApp\Application\Models\Application $submissible
 * @method static \AdvisingApp\Application\Database\Factories\ApplicationAuthenticationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationAuthentication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperApplicationAuthentication {}
}

namespace AdvisingApp\Application\Models{
/**
 * AdvisingApp\Application\Models\ApplicationField
 *
 * @property string $id
 * @property string $label
 * @property string $type
 * @property bool $is_required
 * @property array $config
 * @property string $application_id
 * @property string|null $step_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Application\Models\ApplicationStep|null $step
 * @property-read \AdvisingApp\Application\Models\Application $submissible
 * @method static \AdvisingApp\Application\Database\Factories\ApplicationFieldFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereStepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperApplicationField {}
}

namespace AdvisingApp\Application\Models{
/**
 * AdvisingApp\Application\Models\ApplicationStep
 *
 * @property string $id
 * @property string $label
 * @property array|null $content
 * @property string $application_id
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationField> $fields
 * @property-read int|null $fields_count
 * @property-read \AdvisingApp\Application\Models\Application $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationStep whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperApplicationStep {}
}

namespace AdvisingApp\Application\Models{
/**
 * AdvisingApp\Application\Models\ApplicationSubmission
 *
 * @property string $id
 * @property string $application_id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property string $state_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $author
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationField> $fields
 * @property-read int|null $fields_count
 * @property-read \AdvisingApp\Application\Models\ApplicationSubmissionState $state
 * @property-read \AdvisingApp\Application\Models\Application $submissible
 * @method static \AdvisingApp\Application\Database\Factories\ApplicationSubmissionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Submission licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperApplicationSubmission {}
}

namespace AdvisingApp\Application\Models{
/**
 * AdvisingApp\Application\Models\ApplicationSubmissionState
 *
 * @property string $id
 * @property \AdvisingApp\Application\Enums\ApplicationSubmissionStateClassification $classification
 * @property string $name
 * @property \AdvisingApp\Application\Enums\ApplicationSubmissionStateColorOptions $color
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationSubmission> $submissions
 * @property-read int|null $submissions_count
 * @method static \AdvisingApp\Application\Database\Factories\ApplicationSubmissionStateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSubmissionState withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperApplicationSubmissionState {}
}

namespace AdvisingApp\Assistant\Models{
/**
 * AdvisingApp\Assistant\Models\AssistantChat
 *
 * @property string $id
 * @property string $name
 * @property string $user_id
 * @property string|null $assistant_chat_folder_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Assistant\Models\AssistantChatFolder|null $folder
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Assistant\Models\AssistantChatMessage> $messages
 * @property-read int|null $messages_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat whereAssistantChatFolderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChat whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssistantChat {}
}

namespace AdvisingApp\Assistant\Models{
/**
 * AdvisingApp\Assistant\Models\AssistantChatFolder
 *
 * @property string $id
 * @property string $name
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Assistant\Models\AssistantChat> $chats
 * @property-read int|null $chats_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatFolder whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssistantChatFolder {}
}

namespace AdvisingApp\Assistant\Models{
/**
 * AdvisingApp\Assistant\Models\AssistantChatMessage
 *
 * @property string $id
 * @property string $assistant_chat_id
 * @property string $message
 * @property \AdvisingApp\Assistant\Services\AIInterface\Enums\AIChatMessageFrom $from
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Assistant\Models\AssistantChat $chat
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage whereAssistantChatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssistantChatMessage {}
}

namespace AdvisingApp\Assistant\Models{
/**
 * AdvisingApp\Assistant\Models\AssistantChatMessageLog
 *
 * @property string $id
 * @property string $message
 * @property array $metadata
 * @property string $user_id
 * @property array $request
 * @property int $sent_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereMetadata($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssistantChatMessageLog whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssistantChatMessageLog {}
}

namespace AdvisingApp\Assistant\Models{
/**
 * AdvisingApp\Assistant\Models\Prompt
 *
 * @property string $id
 * @property string $title
 * @property string|null $description
 * @property string $prompt
 * @property string $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Assistant\Models\PromptType $type
 * @method static \AdvisingApp\Assistant\Database\Factories\PromptFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt query()
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt wherePrompt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prompt whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperPrompt {}
}

namespace AdvisingApp\Assistant\Models{
/**
 * AdvisingApp\Assistant\Models\PromptType
 *
 * @property string $id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Assistant\Models\Prompt> $prompts
 * @property-read int|null $prompts_count
 * @method static \AdvisingApp\Assistant\Database\Factories\PromptTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromptType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperPromptType {}
}

namespace AdvisingApp\Audit\Models{
/**
 * AdvisingApp\Audit\Models\Audit
 *
 * @property string $id
 * @property string|null $change_agent_type
 * @property string|null $change_agent_id
 * @property string $event
 * @property string $auditable_type
 * @property string $auditable_id
 * @property array|null $old_values
 * @property array|null $new_values
 * @property string|null $url
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string|null $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $auditable
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $user
 * @method static \AdvisingApp\Audit\Database\Factories\AuditFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Audit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Audit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Audit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereAuditableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereAuditableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereChangeAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereChangeAgentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereNewValues($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereOldValues($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Audit whereUserAgent($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAudit {}
}

namespace AdvisingApp\Authorization\Models{
/**
 * AdvisingApp\Authorization\Models\License
 *
 * @property string $id
 * @property string $user_id
 * @property \AdvisingApp\Authorization\Enums\LicenseType $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|License newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|License newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|License onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|License query()
 * @method static \Illuminate\Database\Eloquent\Builder|License whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|License whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|License whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|License whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|License whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|License whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|License withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|License withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperLicense {}
}

namespace AdvisingApp\Authorization\Models{
/**
 * AdvisingApp\Authorization\Models\Permission
 *
 * @property string $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SystemUser> $systemUsers
 * @property-read int|null $system_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission api()
 * @method static \AdvisingApp\Authorization\Database\Factories\PermissionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission web()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperPermission {}
}

namespace AdvisingApp\Authorization\Models\Pivots{
/**
 * AdvisingApp\Authorization\Models\Pivots\RoleGroupRolePivot
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroupRolePivot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroupRolePivot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroupRolePivot query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperRoleGroupRolePivot {}
}

namespace AdvisingApp\Authorization\Models\Pivots{
/**
 * AdvisingApp\Authorization\Models\Pivots\RoleGroupUserPivot
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroupUserPivot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroupUserPivot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroupUserPivot query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperRoleGroupUserPivot {}
}

namespace AdvisingApp\Authorization\Models{
/**
 * AdvisingApp\Authorization\Models\Role
 *
 * @property string $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\RoleGroup> $roleGroups
 * @property-read int|null $role_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\RoleGroup> $traitRoleGroups
 * @property-read int|null $trait_role_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role api()
 * @method static \AdvisingApp\Authorization\Database\Factories\RoleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role superAdmin()
 * @method static \Illuminate\Database\Eloquent\Builder|Role web()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperRole {}
}

namespace AdvisingApp\Authorization\Models{
/**
 * AdvisingApp\Authorization\Models\RoleGroup
 *
 * @property string $id
 * @property string $name
 * @property string $guard_name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Authorization\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SystemUser> $systemUsers
 * @property-read int|null $system_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\AdvisingApp\Authorization\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \AdvisingApp\Authorization\Database\Factories\RoleGroupFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleGroup withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperRoleGroup {}
}

namespace AdvisingApp\Campaign\Models{
/**
 * AdvisingApp\Campaign\Models\Campaign
 *
 * @property string $id
 * @property string $user_id
 * @property string $caseload_id
 * @property string $name
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Campaign\Models\CampaignAction> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\CaseloadManagement\Models\Caseload $caseload
 * @property-read \App\Models\User $user
 * @method static \AdvisingApp\Campaign\Database\Factories\CampaignFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign hasNotBeenExecuted()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign query()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereCaseloadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperCampaign {}
}

namespace AdvisingApp\Campaign\Models{
/**
 * AdvisingApp\Campaign\Models\CampaignAction
 *
 * @property string $id
 * @property string $campaign_id
 * @property \AdvisingApp\Campaign\Enums\CampaignActionType $type
 * @property array $data
 * @property \Illuminate\Support\Carbon $execute_at
 * @property string|null $last_execution_attempt_at
 * @property string|null $last_execution_attempt_error
 * @property string|null $successfully_executed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\Campaign\Models\Campaign $campaign
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction campaignEnabled()
 * @method static \AdvisingApp\Campaign\Database\Factories\CampaignActionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction hasNotBeenExecuted()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction query()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereExecuteAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereLastExecutionAttemptAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereLastExecutionAttemptError($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereSuccessfullyExecutedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignAction withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperCampaignAction {}
}

namespace AdvisingApp\CareTeam\Models{
/**
 * AdvisingApp\CareTeam\Models\CareTeam
 *
 * @property string $id
 * @property string $user_id
 * @property string $educatable_id
 * @property string $educatable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $educatable
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam whereEducatableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam whereEducatableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CareTeam whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperCareTeam {}
}

namespace AdvisingApp\CaseloadManagement\Models{
/**
 * AdvisingApp\CaseloadManagement\Models\Caseload
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property array|null $filters
 * @property \AdvisingApp\CaseloadManagement\Enums\CaseloadModel $model
 * @property \AdvisingApp\CaseloadManagement\Enums\CaseloadType $type
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\CaseloadManagement\Models\CaseloadSubject> $subjects
 * @property-read int|null $subjects_count
 * @property-read \App\Models\User $user
 * @method static \AdvisingApp\CaseloadManagement\Database\Factories\CaseloadFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload model(\AdvisingApp\CaseloadManagement\Enums\CaseloadModel $model)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload query()
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereFilters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Caseload whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperCaseload {}
}

namespace AdvisingApp\CaseloadManagement\Models{
/**
 * AdvisingApp\CaseloadManagement\Models\CaseloadSubject
 *
 * @property string $id
 * @property string $subject_id
 * @property string $subject_type
 * @property string $caseload_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\CaseloadManagement\Models\Caseload $caseload
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $subject
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject query()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject whereCaseloadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject whereSubjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseloadSubject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperCaseloadSubject {}
}

namespace AdvisingApp\Consent\Models{
/**
 * AdvisingApp\Consent\Models\ConsentAgreement
 *
 * @property string $id
 * @property \AdvisingApp\Consent\Enums\ConsentAgreementType $type
 * @property string $title
 * @property string $description
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Consent\Models\UserConsentAgreement> $userConsentAgreements
 * @property-read int|null $user_consent_agreements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \AdvisingApp\Consent\Database\Factories\ConsentAgreementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConsentAgreement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperConsentAgreement {}
}

namespace AdvisingApp\Consent\Models{
/**
 * AdvisingApp\Consent\Models\UserConsentAgreement
 *
 * @property string $id
 * @property string $user_id
 * @property string $consent_agreement_id
 * @property string $ip_address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement whereConsentAgreementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserConsentAgreement withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperUserConsentAgreement {}
}

namespace AdvisingApp\Division\Models{
/**
 * AdvisingApp\Division\Models\Division
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string $code
 * @property string|null $header
 * @property string|null $footer
 * @property string|null $created_by_id
 * @property string|null $last_updated_by_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\User|null $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @property-read \App\Models\User|null $lastUpdatedBy
 * @property-read \App\Models\NotificationSettingPivot|null $notificationSetting
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Team\Models\Team> $teams
 * @property-read int|null $teams_count
 * @method static \AdvisingApp\Division\Database\Factories\DivisionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Division newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Division newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Division onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Division query()
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereHeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereLastUpdatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Division withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Division withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperDivision {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\EmailTemplate
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property array $content
 * @property string|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \AdvisingApp\Engagement\Database\Factories\EmailTemplateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEmailTemplate {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\Engagement
 *
 * @property-read Educatable $recipient
 * @property string $id
 * @property string|null $user_id
 * @property string|null $engagement_batch_id
 * @property string|null $recipient_id
 * @property string|null $recipient_type
 * @property string|null $subject
 * @property array|null $body
 * @property bool $scheduled
 * @property \Illuminate\Support\Carbon $deliver_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\Engagement\Models\EngagementBatch|null $batch
 * @property-read \App\Models\User|null $createdBy
 * @property-read \AdvisingApp\Engagement\Models\EngagementDeliverable|null $deliverable
 * @property-read \AdvisingApp\Engagement\Models\EngagementBatch|null $engagementBatch
 * @property-read \AdvisingApp\Engagement\Models\EngagementDeliverable|null $engagementDeliverable
 * @property-read \AdvisingApp\Timeline\Models\Timeline|null $timelineRecord
 * @property-read \App\Models\User|null $user
 * @method static \AdvisingApp\Engagement\Database\Factories\EngagementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement hasBeenDelivered()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement hasNotBeenDelivered()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement isAwaitingDelivery()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement isNotPartOfABatch()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement isScheduled()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement sentToProspect()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement sentToStudent()
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereDeliverAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereEngagementBatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereRecipientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereRecipientType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereScheduled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Engagement whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEngagement {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\EngagementBatch
 *
 * @property string $id
 * @property string|null $identifier
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\Engagement> $engagements
 * @property-read int|null $engagements_count
 * @property-read \App\Models\User $user
 * @method static \AdvisingApp\Engagement\Database\Factories\EngagementBatchFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch query()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementBatch whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEngagementBatch {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\EngagementDeliverable
 *
 * @property string $id
 * @property string $engagement_id
 * @property \AdvisingApp\Engagement\Enums\EngagementDeliveryMethod $channel
 * @property string|null $external_reference_id
 * @property string|null $external_status
 * @property \AdvisingApp\Engagement\Enums\EngagementDeliveryStatus $delivery_status
 * @property \Illuminate\Support\Carbon|null $delivered_at
 * @property \Illuminate\Support\Carbon|null $last_delivery_attempt
 * @property string|null $delivery_response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\Engagement\Models\Engagement $engagement
 * @method static \AdvisingApp\Engagement\Database\Factories\EngagementDeliverableFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable query()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereDeliveredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereDeliveryResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereDeliveryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereEngagementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereExternalReferenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereExternalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereLastDeliveryAttempt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEngagementDeliverable {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\EngagementFile
 *
 * @property string $id
 * @property string $description
 * @property string|null $retention_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Prospect\Models\Prospect> $prospects
 * @property-read int|null $prospects_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\StudentDataModel\Models\Student> $students
 * @property-read int|null $students_count
 * @method static \AdvisingApp\Engagement\Database\Factories\EngagementFileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile whereRetentionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEngagementFile {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\EngagementFileEntities
 *
 * @property string $engagement_file_id
 * @property string $entity_id
 * @property string $entity_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Engagement\Models\EngagementFile $engagementFile
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $entity
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities query()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities whereEngagementFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities whereEntityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementFileEntities whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEngagementFileEntities {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\EngagementResponse
 *
 * @property string $id
 * @property string|null $sender_id
 * @property string|null $sender_type
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $sent_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $sender
 * @property-read \AdvisingApp\Timeline\Models\Timeline|null $timelineRecord
 * @method static \AdvisingApp\Engagement\Database\Factories\EngagementResponseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse sentByProspect()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse sentByStudent()
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse whereSenderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse whereSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementResponse whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEngagementResponse {}
}

namespace AdvisingApp\Engagement\Models{
/**
 * AdvisingApp\Engagement\Models\SmsTemplate
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property array $content
 * @property string|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \AdvisingApp\Engagement\Database\Factories\SmsTemplateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSmsTemplate {}
}

namespace AdvisingApp\Form\Models{
/**
 * AdvisingApp\Form\Models\Form
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property bool $embed_enabled
 * @property array|null $allowed_domains
 * @property string|null $primary_color
 * @property \AdvisingApp\Form\Enums\Rounding|null $rounding
 * @property bool $is_authenticated
 * @property bool $is_wizard
 * @property bool $recaptcha_enabled
 * @property array|null $content
 * @property string|null $on_screen_response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \AdvisingApp\Form\Models\FormEmailAutoReply|null $emailAutoReply
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Form\Models\FormField> $fields
 * @property-read int|null $fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Form\Models\FormStep> $steps
 * @property-read int|null $steps_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Form\Models\FormSubmission> $submissions
 * @property-read int|null $submissions_count
 * @method static \AdvisingApp\Form\Database\Factories\FormFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Form newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form query()
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereAllowedDomains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereEmbedEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereIsAuthenticated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereIsWizard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereOnScreenResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form wherePrimaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereRecaptchaEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereRounding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperForm {}
}

namespace AdvisingApp\Form\Models{
/**
 * AdvisingApp\Form\Models\FormAuthentication
 *
 * @property string $id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property string|null $code
 * @property string $form_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $author
 * @property-read \AdvisingApp\Form\Models\Form $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormAuthentication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperFormAuthentication {}
}

namespace AdvisingApp\Form\Models{
/**
 * AdvisingApp\Form\Models\FormEmailAutoReply
 *
 * @property string $id
 * @property string|null $subject
 * @property array|null $body
 * @property bool $is_enabled
 * @property string $form_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Form\Models\Form $form
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormEmailAutoReply whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperFormEmailAutoReply {}
}

namespace AdvisingApp\Form\Models{
/**
 * AdvisingApp\Form\Models\FormField
 *
 * @property string $id
 * @property string $label
 * @property string $type
 * @property bool $is_required
 * @property array $config
 * @property string $form_id
 * @property string|null $step_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Form\Models\FormStep|null $step
 * @property-read \AdvisingApp\Form\Models\Form $submissible
 * @method static \AdvisingApp\Form\Database\Factories\FormFieldFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FormField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereStepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperFormField {}
}

namespace AdvisingApp\Form\Models{
/**
 * AdvisingApp\Form\Models\FormStep
 *
 * @property string $id
 * @property string $label
 * @property array|null $content
 * @property string $form_id
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Form\Models\FormField> $fields
 * @property-read int|null $fields_count
 * @property-read \AdvisingApp\Form\Models\Form $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormStep whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperFormStep {}
}

namespace AdvisingApp\Form\Models{
/**
 * AdvisingApp\Form\Models\FormSubmission
 *
 * @property Student|Prospect|null $author
 * @property string $id
 * @property string $form_id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property \Carbon\CarbonImmutable|null $submitted_at
 * @property \Carbon\CarbonImmutable|null $canceled_at
 * @property \AdvisingApp\Form\Enums\FormSubmissionRequestDeliveryMethod|null $request_method
 * @property string|null $request_note
 * @property string|null $requester_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Form\Models\FormField> $fields
 * @property-read int|null $fields_count
 * @property-read \App\Models\User|null $requester
 * @property-read \AdvisingApp\Form\Models\Form $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission canceled()
 * @method static \AdvisingApp\Form\Database\Factories\FormSubmissionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Submission licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission notCanceled()
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission notSubmitted()
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission requested()
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission submitted()
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereCanceledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereRequestMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereRequestNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereRequesterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormSubmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperFormSubmission {}
}

namespace AdvisingApp\InAppCommunication\Models{
/**
 * AdvisingApp\InAppCommunication\Models\TwilioConversation
 *
 * @property string $sid
 * @property string|null $friendly_name
 * @property \AdvisingApp\InAppCommunication\Enums\ConversationType $type
 * @property string|null $channel_name
 * @property bool $is_private_channel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $managers
 * @property-read int|null $managers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $participants
 * @property-read int|null $participants_count
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation whereChannelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation whereFriendlyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation whereIsPrivateChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation whereSid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperTwilioConversation {}
}

namespace AdvisingApp\InAppCommunication\Models{
/**
 * AdvisingApp\InAppCommunication\Models\TwilioConversationUser
 *
 * @property string $conversation_sid
 * @property string $user_id
 * @property string $participant_sid
 * @property bool $is_channel_manager
 * @property bool $is_pinned
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\InAppCommunication\Models\TwilioConversation $conversation
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser whereConversationSid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser whereIsChannelManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser whereIsPinned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser whereParticipantSid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwilioConversationUser whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperTwilioConversationUser {}
}

namespace AdvisingApp\Interaction\Models{
/**
 * AdvisingApp\Interaction\Models\Interaction
 *
 * @property string $id
 * @property string|null $subject
 * @property string|null $description
 * @property string|null $user_id
 * @property string|null $interactable_id
 * @property string|null $interactable_type
 * @property string|null $interaction_type_id
 * @property string|null $interaction_relation_id
 * @property string|null $interaction_campaign_id
 * @property string|null $interaction_driver_id
 * @property string|null $interaction_status_id
 * @property string|null $interaction_outcome_id
 * @property string|null $division_id
 * @property \Illuminate\Support\Carbon $start_datetime
 * @property \Illuminate\Support\Carbon|null $end_datetime
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\Interaction\Models\InteractionCampaign|null $campaign
 * @property-read \AdvisingApp\Division\Models\Division|null $division
 * @property-read \AdvisingApp\Interaction\Models\InteractionDriver|null $driver
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $interactable
 * @property-read \AdvisingApp\Interaction\Models\InteractionOutcome|null $outcome
 * @property-read \AdvisingApp\Interaction\Models\InteractionRelation|null $relation
 * @property-read \AdvisingApp\Interaction\Models\InteractionStatus|null $status
 * @property-read \AdvisingApp\Interaction\Models\InteractionType|null $type
 * @property-read \App\Models\User|null $user
 * @method static \AdvisingApp\Interaction\Database\Factories\InteractionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereDivisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereEndDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractionCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractionDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractionOutcomeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractionRelationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractionStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereInteractionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereStartDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInteraction {}
}

namespace AdvisingApp\Interaction\Models{
/**
 * AdvisingApp\Interaction\Models\InteractionCampaign
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @method static \AdvisingApp\Interaction\Database\Factories\InteractionCampaignFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign query()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionCampaign withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInteractionCampaign {}
}

namespace AdvisingApp\Interaction\Models{
/**
 * AdvisingApp\Interaction\Models\InteractionDriver
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @method static \AdvisingApp\Interaction\Database\Factories\InteractionDriverFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver query()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionDriver withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInteractionDriver {}
}

namespace AdvisingApp\Interaction\Models{
/**
 * AdvisingApp\Interaction\Models\InteractionOutcome
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @method static \AdvisingApp\Interaction\Database\Factories\InteractionOutcomeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome query()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionOutcome withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInteractionOutcome {}
}

namespace AdvisingApp\Interaction\Models{
/**
 * AdvisingApp\Interaction\Models\InteractionRelation
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @method static \AdvisingApp\Interaction\Database\Factories\InteractionRelationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation query()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionRelation withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInteractionRelation {}
}

namespace AdvisingApp\Interaction\Models{
/**
 * AdvisingApp\Interaction\Models\InteractionStatus
 *
 * @property string $id
 * @property string $name
 * @property \AdvisingApp\Interaction\Enums\InteractionStatusColorOptions $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @method static \AdvisingApp\Interaction\Database\Factories\InteractionStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionStatus withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInteractionStatus {}
}

namespace AdvisingApp\Interaction\Models{
/**
 * AdvisingApp\Interaction\Models\InteractionType
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @method static \AdvisingApp\Interaction\Database\Factories\InteractionTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType query()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|InteractionType withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInteractionType {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\Asset
 *
 * @property-read string $purchase_age
 * @property string $id
 * @property string $serial_number
 * @property string $name
 * @property string $description
 * @property string $type_id
 * @property string $status_id
 * @property string $location_id
 * @property \Illuminate\Support\Carbon $purchase_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\AssetCheckIn> $checkIns
 * @property-read int|null $check_ins_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\AssetCheckOut> $checkOuts
 * @property-read int|null $check_outs_count
 * @property-read \AdvisingApp\InventoryManagement\Models\AssetCheckIn|null $latestCheckIn
 * @property-read \AdvisingApp\InventoryManagement\Models\AssetCheckOut|null $latestCheckOut
 * @property-read \AdvisingApp\InventoryManagement\Models\AssetLocation $location
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\MaintenanceActivity> $maintenanceActivities
 * @property-read int|null $maintenance_activities_count
 * @property-read \AdvisingApp\InventoryManagement\Models\AssetStatus $status
 * @property-read \AdvisingApp\InventoryManagement\Models\AssetType $type
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\AssetFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Asset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset query()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset wherePurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAsset {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\AssetCheckIn
 *
 * @property string $id
 * @property string $asset_id
 * @property string|null $checked_in_by_type
 * @property string|null $checked_in_by_id
 * @property string $checked_in_from_type
 * @property string $checked_in_from_id
 * @property \Illuminate\Support\Carbon $checked_in_at
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \AdvisingApp\InventoryManagement\Models\Asset $asset
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\InventoryManagement\Models\AssetCheckOut|null $checkOut
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $checkedInBy
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $checkedInFrom
 * @property-read \AdvisingApp\Timeline\Models\Timeline|null $timelineRecord
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\AssetCheckInFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereAssetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereCheckedInAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereCheckedInById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereCheckedInByType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereCheckedInFromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereCheckedInFromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckIn withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssetCheckIn {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\AssetCheckOut
 *
 * @property string $id
 * @property string $asset_id
 * @property string|null $asset_check_in_id
 * @property string|null $checked_out_by_type
 * @property string|null $checked_out_by_id
 * @property string $checked_out_to_type
 * @property string $checked_out_to_id
 * @property \Illuminate\Support\Carbon $checked_out_at
 * @property \Illuminate\Support\Carbon|null $expected_check_in_at
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \AdvisingApp\InventoryManagement\Models\Asset $asset
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\InventoryManagement\Models\AssetCheckIn|null $checkIn
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $checkedOutBy
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $checkedOutTo
 * @property-read \AdvisingApp\Timeline\Models\Timeline|null $timelineRecord
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\AssetCheckOutFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereAssetCheckInId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereAssetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereCheckedOutAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereCheckedOutById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereCheckedOutByType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereCheckedOutToId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereCheckedOutToType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereExpectedCheckInAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut withoutReturned()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetCheckOut withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssetCheckOut {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\AssetLocation
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\Asset> $assets
 * @property-read int|null $assets_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\AssetLocationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetLocation withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssetLocation {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\AssetStatus
 *
 * @property string $id
 * @property \AdvisingApp\InventoryManagement\Enums\SystemAssetStatusClassification $classification
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\Asset> $assets
 * @property-read int|null $assets_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\AssetStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetStatus withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssetStatus {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\AssetType
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\Asset> $assets
 * @property-read int|null $assets_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\AssetTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetType withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperAssetType {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\MaintenanceActivity
 *
 * @property string $id
 * @property string $asset_id
 * @property string|null $maintenance_provider_id
 * @property string $details
 * @property \Illuminate\Support\Carbon|null $scheduled_date
 * @property \Illuminate\Support\Carbon|null $completed_date
 * @property \AdvisingApp\InventoryManagement\Enums\MaintenanceActivityStatus $status
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \AdvisingApp\InventoryManagement\Models\Asset $asset
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\InventoryManagement\Models\MaintenanceProvider|null $maintenanceProvider
 * @property-read \AdvisingApp\Timeline\Models\Timeline|null $timelineRecord
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\MaintenanceActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereAssetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereCompletedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereMaintenanceProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereScheduledDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceActivity withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperMaintenanceActivity {}
}

namespace AdvisingApp\InventoryManagement\Models{
/**
 * AdvisingApp\InventoryManagement\Models\MaintenanceProvider
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\MaintenanceActivity> $maintenanceActivities
 * @property-read int|null $maintenance_activities_count
 * @method static \AdvisingApp\InventoryManagement\Database\Factories\MaintenanceProviderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceProvider withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperMaintenanceProvider {}
}

namespace AdvisingApp\KnowledgeBase\Models{
/**
 * AdvisingApp\KnowledgeBase\Models\KnowledgeBaseCategory
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\KnowledgeBase\Models\KnowledgeBaseItem> $knowledgeBaseItems
 * @property-read int|null $knowledge_base_items_count
 * @method static \AdvisingApp\KnowledgeBase\Database\Factories\KnowledgeBaseCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseCategory withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperKnowledgeBaseCategory {}
}

namespace AdvisingApp\KnowledgeBase\Models{
/**
 * AdvisingApp\KnowledgeBase\Models\KnowledgeBaseItem
 *
 * @property string $id
 * @property bool $public
 * @property string $title
 * @property array|null $article_details
 * @property string|null $notes
 * @property string|null $quality_id
 * @property string|null $status_id
 * @property string|null $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\KnowledgeBase\Models\KnowledgeBaseCategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Division\Models\Division> $division
 * @property-read int|null $division_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \AdvisingApp\KnowledgeBase\Models\KnowledgeBaseQuality|null $quality
 * @property-read \AdvisingApp\KnowledgeBase\Models\KnowledgeBaseStatus|null $status
 * @method static \AdvisingApp\KnowledgeBase\Database\Factories\KnowledgeBaseItemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereArticleDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereQualityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperKnowledgeBaseItem {}
}

namespace AdvisingApp\KnowledgeBase\Models{
/**
 * AdvisingApp\KnowledgeBase\Models\KnowledgeBaseQuality
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\KnowledgeBase\Models\KnowledgeBaseItem> $knowledgeBaseItems
 * @property-read int|null $knowledge_base_items_count
 * @method static \AdvisingApp\KnowledgeBase\Database\Factories\KnowledgeBaseQualityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality query()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseQuality withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperKnowledgeBaseQuality {}
}

namespace AdvisingApp\KnowledgeBase\Models{
/**
 * AdvisingApp\KnowledgeBase\Models\KnowledgeBaseStatus
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\KnowledgeBase\Models\KnowledgeBaseItem> $knowledgeBaseItems
 * @property-read int|null $knowledge_base_items_count
 * @method static \AdvisingApp\KnowledgeBase\Database\Factories\KnowledgeBaseStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KnowledgeBaseStatus withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperKnowledgeBaseStatus {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\Calendar
 *
 * @property string $id
 * @property string|null $name
 * @property \AdvisingApp\MeetingCenter\Enums\CalendarProvider $provider_type
 * @property mixed|null $provider_id
 * @property mixed $provider_email
 * @property mixed|null $oauth_token
 * @property mixed|null $oauth_refresh_token
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $oauth_token_expires_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\CalendarEvent> $events
 * @property-read int|null $events_count
 * @property-read \App\Models\User $user
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\CalendarFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOauthRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOauthToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOauthTokenExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereProviderEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereProviderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperCalendar {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\CalendarEvent
 *
 * @property string $id
 * @property string $title
 * @property string|null $description
 * @property array|null $attendees
 * @property string|null $provider_id
 * @property string $calendar_id
 * @property \Illuminate\Support\Carbon $starts_at
 * @property \Illuminate\Support\Carbon $ends_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\MeetingCenter\Models\Calendar $calendar
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\CalendarEventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereAttendees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereCalendarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperCalendarEvent {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\Event
 *
 * @property string $id
 * @property string $title
 * @property string|null $description
 * @property string|null $location
 * @property int|null $capacity
 * @property \Illuminate\Support\Carbon $starts_at
 * @property \Illuminate\Support\Carbon $ends_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventAttendee> $attendees
 * @property-read int|null $attendees_count
 * @property-read \AdvisingApp\MeetingCenter\Models\EventRegistrationForm|null $eventRegistrationForm
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\EventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEvent {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\EventAttendee
 *
 * @property string $id
 * @property \AdvisingApp\MeetingCenter\Enums\EventAttendeeStatus $status
 * @property string $email
 * @property string $event_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\MeetingCenter\Models\Event $event
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Prospect\Models\Prospect> $prospects
 * @property-read int|null $prospects_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\StudentDataModel\Models\Student> $students
 * @property-read int|null $students_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventRegistrationFormSubmission> $submissions
 * @property-read int|null $submissions_count
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\EventAttendeeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEventAttendee {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\EventRegistrationForm
 *
 * @property string $id
 * @property string $event_id
 * @property bool $embed_enabled
 * @property array|null $allowed_domains
 * @property string|null $primary_color
 * @property \AdvisingApp\Form\Enums\Rounding|null $rounding
 * @property bool $is_wizard
 * @property bool $recaptcha_enabled
 * @property array|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \AdvisingApp\MeetingCenter\Models\Event $event
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventRegistrationFormField> $fields
 * @property-read int|null $fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventRegistrationFormStep> $steps
 * @property-read int|null $steps_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventRegistrationFormSubmission> $submissions
 * @property-read int|null $submissions_count
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\EventRegistrationFormFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereAllowedDomains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereEmbedEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereIsWizard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm wherePrimaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereRecaptchaEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereRounding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationForm withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEventRegistrationForm {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\EventRegistrationFormAuthentication
 *
 * @property-read EventRegistrationForm $submissible
 * @property string $id
 * @property string $event_attendee_id
 * @property string|null $code
 * @property string $form_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\MeetingCenter\Models\EventAttendee $author
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication whereEventAttendeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormAuthentication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEventRegistrationFormAuthentication {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\EventRegistrationFormField
 *
 * @property string $id
 * @property string $label
 * @property string $type
 * @property bool $is_required
 * @property array $config
 * @property string $form_id
 * @property string|null $step_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\MeetingCenter\Models\EventRegistrationFormStep|null $step
 * @property-read \AdvisingApp\MeetingCenter\Models\EventRegistrationForm $submissible
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\EventRegistrationFormFieldFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereStepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEventRegistrationFormField {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\EventRegistrationFormStep
 *
 * @property string $id
 * @property string $label
 * @property array|null $content
 * @property string $form_id
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventRegistrationFormField> $fields
 * @property-read int|null $fields_count
 * @property-read \AdvisingApp\MeetingCenter\Models\EventRegistrationForm $submissible
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\EventRegistrationFormStepFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormStep whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEventRegistrationFormStep {}
}

namespace AdvisingApp\MeetingCenter\Models{
/**
 * AdvisingApp\MeetingCenter\Models\EventRegistrationFormSubmission
 *
 * @property string $id
 * @property string $form_id
 * @property string $event_attendee_id
 * @property \AdvisingApp\MeetingCenter\Enums\EventAttendeeStatus $attendee_status
 * @property \Carbon\CarbonImmutable|null $submitted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property \AdvisingApp\Form\Enums\FormSubmissionRequestDeliveryMethod $request_method
 * @property-read \AdvisingApp\MeetingCenter\Models\EventAttendee $author
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventRegistrationFormField> $fields
 * @property-read int|null $fields_count
 * @property-read \App\Models\User $requester
 * @property-read \AdvisingApp\MeetingCenter\Models\EventRegistrationForm $submissible
 * @method static \AdvisingApp\MeetingCenter\Database\Factories\EventRegistrationFormSubmissionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Submission licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereAttendeeStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereEventAttendeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventRegistrationFormSubmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEventRegistrationFormSubmission {}
}

namespace AdvisingApp\Notification\Models{
/**
 * AdvisingApp\Notification\Models\OutboundDeliverable
 *
 * @property string $id
 * @property string|null $related_id
 * @property string|null $related_type
 * @property string|null $recipient_id
 * @property string|null $recipient_type
 * @property \AdvisingApp\Notification\Enums\NotificationChannel $channel
 * @property string $notification_class
 * @property string|null $external_reference_id
 * @property string|null $external_status
 * @property mixed|null $content
 * @property \AdvisingApp\Notification\Enums\NotificationDeliveryStatus $delivery_status
 * @property \Illuminate\Support\Carbon|null $delivered_at
 * @property \Illuminate\Support\Carbon|null $last_delivery_attempt
 * @property string|null $delivery_response
 * @property int $quota_usage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $recipient
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $related
 * @method static \AdvisingApp\Notification\Database\Factories\OutboundDeliverableFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable query()
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereDeliveredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereDeliveryResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereDeliveryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereExternalReferenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereExternalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereLastDeliveryAttempt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereNotificationClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereQuotaUsage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereRecipientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereRecipientType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereRelatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OutboundDeliverable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperOutboundDeliverable {}
}

namespace AdvisingApp\Notification\Models{
/**
 * AdvisingApp\Notification\Models\Subscription
 *
 * @property string $id
 * @property string $user_id
 * @property string $subscribable_id
 * @property string $subscribable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $subscribable
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereSubscribableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereSubscribableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSubscription {}
}

namespace AdvisingApp\Prospect\Models{
/**
 * AdvisingApp\Prospect\Models\Prospect
 *
 * @property string $display_name
 * @property string $id
 * @property string $status_id
 * @property string $source_id
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string|null $preferred
 * @property string|null $description
 * @property string|null $email
 * @property string|null $email_2
 * @property string|null $mobile
 * @property bool $sms_opt_out
 * @property bool $email_bounce
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $address_2
 * @property \Illuminate\Support\Carbon|null $birthdate
 * @property string|null $hsgrad
 * @property string|null $assigned_to_id
 * @property string|null $created_by_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Alert\Models\Alert> $alerts
 * @property-read int|null $alerts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationSubmission> $applicationSubmissions
 * @property-read int|null $application_submissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\AssetCheckIn> $assetCheckIns
 * @property-read int|null $asset_check_ins_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\AssetCheckOut> $assetCheckOuts
 * @property-read int|null $asset_check_outs_count
 * @property-read \App\Models\User|null $assignedTo
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $careTeam
 * @property-read int|null $care_team_count
 * @property-read \App\Models\User|null $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\EngagementFile> $engagementFiles
 * @property-read int|null $engagement_files_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\EngagementResponse> $engagementResponses
 * @property-read int|null $engagement_responses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\Engagement> $engagements
 * @property-read int|null $engagements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventAttendee> $eventAttendeeRecords
 * @property-read int|null $event_attendee_records_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Form\Models\FormSubmission> $formSubmissions
 * @property-read int|null $form_submissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\EngagementResponse> $orderedEngagementResponses
 * @property-read int|null $ordered_engagement_responses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\Engagement> $orderedEngagements
 * @property-read int|null $ordered_engagements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequest> $serviceRequests
 * @property-read int|null $service_requests_count
 * @property-read \AdvisingApp\Prospect\Models\ProspectSource $source
 * @property-read \AdvisingApp\Prospect\Models\ProspectStatus $status
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $subscribedUsers
 * @property-read int|null $subscribed_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Notification\Models\Subscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Task\Models\Task> $tasks
 * @property-read int|null $tasks_count
 * @method static \AdvisingApp\Prospect\Database\Factories\ProspectFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect query()
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereAssignedToId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereEmail2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereEmailBounce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereHsgrad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect wherePreferred($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereSmsOptOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereSourceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Prospect withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperProspect {}
}

namespace AdvisingApp\Prospect\Models{
/**
 * AdvisingApp\Prospect\Models\ProspectSource
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Prospect\Models\Prospect> $prospects
 * @property-read int|null $prospects_count
 * @method static \AdvisingApp\Prospect\Database\Factories\ProspectSourceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectSource withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperProspectSource {}
}

namespace AdvisingApp\Prospect\Models{
/**
 * AdvisingApp\Prospect\Models\ProspectStatus
 *
 * @property string $id
 * @property \AdvisingApp\Prospect\Enums\SystemProspectClassification $classification
 * @property string $name
 * @property \AdvisingApp\Prospect\Enums\ProspectStatusColorOptions $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Prospect\Models\Prospect> $prospects
 * @property-read int|null $prospects_count
 * @method static \AdvisingApp\Prospect\Database\Factories\ProspectStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProspectStatus withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperProspectStatus {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ChangeRequest
 *
 * @property string $id
 * @property string|null $created_by
 * @property string $change_request_type_id
 * @property string $change_request_status_id
 * @property string $title
 * @property string $description
 * @property string $reason
 * @property string $backout_strategy
 * @property int $impact
 * @property int $likelihood
 * @property int $risk_score
 * @property \Illuminate\Support\Carbon $start_time
 * @property \Illuminate\Support\Carbon $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ChangeRequestResponse> $approvals
 * @property-read int|null $approvals_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ChangeRequestResponse> $responses
 * @property-read int|null $responses_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ChangeRequestStatus $status
 * @property-read \AdvisingApp\ServiceManagement\Models\ChangeRequestType $type
 * @property-read \App\Models\User|null $user
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ChangeRequestFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereBackoutStrategy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereChangeRequestStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereChangeRequestTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereImpact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereLikelihood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereRiskScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperChangeRequest {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ChangeRequestResponse
 *
 * @property string $id
 * @property string $change_request_id
 * @property string $user_id
 * @property bool $approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ChangeRequest $changeRequest
 * @property-read \App\Models\User $user
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ChangeRequestResponseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse whereChangeRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestResponse whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperChangeRequestResponse {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ChangeRequestStatus
 *
 * @property string $id
 * @property string $name
 * @property \AdvisingApp\ServiceManagement\Enums\SystemChangeRequestClassification $classification
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ChangeRequestStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperChangeRequestStatus {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ChangeRequestType
 *
 * @property string $id
 * @property string $name
 * @property int $number_of_required_approvals
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ChangeRequest> $changeRequests
 * @property-read int|null $change_requests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $userApprovers
 * @property-read int|null $user_approvers_count
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ChangeRequestTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType whereNumberOfRequiredApprovals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequestType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperChangeRequestType {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequest
 *
 * @property-read Student|Prospect $respondent
 * @property string $id
 * @property string $service_request_number
 * @property string $respondent_type
 * @property string $respondent_id
 * @property string|null $close_details
 * @property string|null $res_details
 * @property string|null $service_request_form_submission_id
 * @property string|null $division_id
 * @property string|null $status_id
 * @property string|null $priority_id
 * @property string|null $created_by_id
 * @property \Carbon\CarbonImmutable|null $status_updated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestAssignment|null $assignedTo
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestAssignment> $assignments
 * @property-read int|null $assignments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\User|null $createdBy
 * @property-read \AdvisingApp\Division\Models\Division|null $division
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestHistory> $histories
 * @property-read int|null $histories_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestAssignment|null $initialAssignment
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestUpdate|null $latestInboundServiceRequestUpdate
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestUpdate|null $latestOutboundServiceRequestUpdate
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestPriority|null $priority
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestFormSubmission|null $serviceRequestFormSubmission
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestUpdate> $serviceRequestUpdates
 * @property-read int|null $service_request_updates_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestStatus|null $status
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ServiceRequestFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest open()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereCloseDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereDivisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest wherePriorityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereResDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereRespondentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereRespondentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereServiceRequestFormSubmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereServiceRequestNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereStatusUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequest withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequest {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestAssignment
 *
 * @property string $id
 * @property string $service_request_id
 * @property string $user_id
 * @property string|null $assigned_by_id
 * @property \Illuminate\Support\Carbon $assigned_at
 * @property \AdvisingApp\ServiceManagement\Enums\ServiceRequestAssignmentStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $assignedBy
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequest $serviceRequest
 * @property-read \App\Models\User $user
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ServiceRequestAssignmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereAssignedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereAssignedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereServiceRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestAssignment whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestAssignment {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestForm
 *
 * @property string $id
 * @property string|null $service_request_type_id
 * @property string $name
 * @property string|null $description
 * @property bool $embed_enabled
 * @property array|null $allowed_domains
 * @property string|null $primary_color
 * @property \AdvisingApp\Form\Enums\Rounding|null $rounding
 * @property bool $is_authenticated
 * @property bool $is_wizard
 * @property bool $recaptcha_enabled
 * @property array|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestFormField> $fields
 * @property-read int|null $fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestFormStep> $steps
 * @property-read int|null $steps_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestFormSubmission> $submissions
 * @property-read int|null $submissions_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereAllowedDomains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereEmbedEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereIsAuthenticated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereIsWizard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm wherePrimaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereRecaptchaEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereRounding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereServiceRequestTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestForm whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestForm {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestFormAuthentication
 *
 * @property string $id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property string|null $code
 * @property string $service_request_form_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $author
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestForm $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication whereServiceRequestFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormAuthentication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestFormAuthentication {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestFormField
 *
 * @property string $id
 * @property string $label
 * @property string $type
 * @property bool $is_required
 * @property array $config
 * @property string $service_request_form_id
 * @property string|null $service_request_form_step_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestFormStep|null $step
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestForm $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereServiceRequestFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereServiceRequestFormStepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestFormField {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestFormStep
 *
 * @property string $id
 * @property string $label
 * @property array|null $content
 * @property string $service_request_form_id
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestFormField> $fields
 * @property-read int|null $fields_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestForm|null $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep whereServiceRequestFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormStep whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestFormStep {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestFormSubmission
 *
 * @property Student|Prospect|null $author
 * @property string $id
 * @property string $service_request_form_id
 * @property string|null $service_request_priority_id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property \Carbon\CarbonImmutable|null $submitted_at
 * @property \Carbon\CarbonImmutable|null $canceled_at
 * @property \AdvisingApp\Form\Enums\FormSubmissionRequestDeliveryMethod|null $request_method
 * @property string|null $request_note
 * @property string|null $requester_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestFormField> $fields
 * @property-read int|null $fields_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestPriority|null $priority
 * @property-read \App\Models\User|null $requester
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequest|null $serviceRequest
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestForm $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission canceled()
 * @method static \Illuminate\Database\Eloquent\Builder|Submission licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission notCanceled()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission notSubmitted()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission requested()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission submitted()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereCanceledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereRequestMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereRequestNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereRequesterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereServiceRequestFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereServiceRequestPriorityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestFormSubmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestFormSubmission {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestHistory
 *
 * @property string $id
 * @property string $service_request_id
 * @property array $original_values
 * @property array $new_values
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequest $serviceRequest
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ServiceRequestHistoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory whereNewValues($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory whereOriginalValues($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory whereServiceRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestHistory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestHistory {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestPriority
 *
 * @property string $id
 * @property string $name
 * @property int $order
 * @property string|null $sla_id
 * @property string $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequest> $serviceRequests
 * @property-read int|null $service_requests_count
 * @property-read \AdvisingApp\ServiceManagement\Models\Sla|null $sla
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestType $type
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ServiceRequestPriorityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereSlaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestPriority withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestPriority {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestStatus
 *
 * @property string $id
 * @property \AdvisingApp\ServiceManagement\Enums\SystemServiceRequestClassification $classification
 * @property string $name
 * @property \AdvisingApp\ServiceManagement\Enums\ColumnColorOptions $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequest> $serviceRequests
 * @property-read int|null $service_requests_count
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ServiceRequestStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestStatus withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestStatus {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestType
 *
 * @property string $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequestForm|null $form
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestPriority> $priorities
 * @property-read int|null $priorities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequest> $serviceRequests
 * @property-read int|null $service_requests_count
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ServiceRequestTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestType withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestType {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\ServiceRequestUpdate
 *
 * @property string $id
 * @property string|null $service_request_id
 * @property string $update
 * @property bool $internal
 * @property \AdvisingApp\ServiceManagement\Enums\ServiceRequestUpdateDirection $direction
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \AdvisingApp\ServiceManagement\Models\ServiceRequest|null $serviceRequest
 * @method static \AdvisingApp\ServiceManagement\Database\Factories\ServiceRequestUpdateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereInternal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereServiceRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceRequestUpdate withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperServiceRequestUpdate {}
}

namespace AdvisingApp\ServiceManagement\Models{
/**
 * AdvisingApp\ServiceManagement\Models\Sla
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property int|null $response_seconds
 * @property int|null $resolution_seconds
 * @property string|null $terms
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequestPriority> $serviceRequestPriorities
 * @property-read int|null $service_request_priorities_count
 * @method static \Illuminate\Database\Eloquent\Builder|Sla newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sla newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sla onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sla query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereResolutionSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereResponseSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sla withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sla withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSla {}
}

namespace AdvisingApp\StudentDataModel\Models{
/**
 * AdvisingApp\StudentDataModel\Models\Enrollment
 *
 * @method static \AdvisingApp\StudentDataModel\Database\Factories\EnrollmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enrollment query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperEnrollment {}
}

namespace AdvisingApp\StudentDataModel\Models{
/**
 * AdvisingApp\StudentDataModel\Models\Performance
 *
 * @property-read \AdvisingApp\StudentDataModel\Models\Student|null $student
 * @method static \AdvisingApp\StudentDataModel\Database\Factories\PerformanceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Performance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Performance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Performance query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperPerformance {}
}

namespace AdvisingApp\StudentDataModel\Models{
/**
 * AdvisingApp\StudentDataModel\Models\Program
 *
 * @method static \AdvisingApp\StudentDataModel\Database\Factories\ProgramFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Program newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperProgram {}
}

namespace AdvisingApp\StudentDataModel\Models{
/**
 * AdvisingApp\StudentDataModel\Models\Student
 *
 * @property string $display_name
 * @property string $mobile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Alert\Models\Alert> $alerts
 * @property-read int|null $alerts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Application\Models\ApplicationSubmission> $applicationSubmissions
 * @property-read int|null $application_submissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\AssetCheckIn> $assetCheckIns
 * @property-read int|null $asset_check_ins_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\InventoryManagement\Models\AssetCheckOut> $assetCheckOuts
 * @property-read int|null $asset_check_outs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $careTeam
 * @property-read int|null $care_team_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\EngagementFile> $engagementFiles
 * @property-read int|null $engagement_files_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\EngagementResponse> $engagementResponses
 * @property-read int|null $engagement_responses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\Engagement> $engagements
 * @property-read int|null $engagements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\StudentDataModel\Models\Enrollment> $enrollments
 * @property-read int|null $enrollments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\MeetingCenter\Models\EventAttendee> $eventAttendeeRecords
 * @property-read int|null $event_attendee_records_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Form\Models\FormSubmission> $formSubmissions
 * @property-read int|null $form_submissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Interaction\Models\Interaction> $interactions
 * @property-read int|null $interactions_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\EngagementResponse> $orderedEngagementResponses
 * @property-read int|null $ordered_engagement_responses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Engagement\Models\Engagement> $orderedEngagements
 * @property-read int|null $ordered_engagements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\StudentDataModel\Models\Performance> $performances
 * @property-read int|null $performances_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\StudentDataModel\Models\Program> $programs
 * @property-read int|null $programs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\ServiceManagement\Models\ServiceRequest> $serviceRequests
 * @property-read int|null $service_requests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $subscribedUsers
 * @property-read int|null $subscribed_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Notification\Models\Subscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Task\Models\Task> $tasks
 * @property-read int|null $tasks_count
 * @method static \AdvisingApp\StudentDataModel\Database\Factories\StudentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperStudent {}
}

namespace AdvisingApp\Survey\Models{
/**
 * AdvisingApp\Survey\Models\Survey
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property bool $embed_enabled
 * @property array|null $allowed_domains
 * @property string|null $primary_color
 * @property \AdvisingApp\Form\Enums\Rounding|null $rounding
 * @property bool $is_authenticated
 * @property bool $is_wizard
 * @property bool $recaptcha_enabled
 * @property array|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Survey\Models\SurveyField> $fields
 * @property-read int|null $fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Survey\Models\SurveyStep> $steps
 * @property-read int|null $steps_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Survey\Models\SurveySubmission> $submissions
 * @property-read int|null $submissions_count
 * @method static \AdvisingApp\Survey\Database\Factories\SurveyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey query()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereAllowedDomains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereEmbedEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereIsAuthenticated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereIsWizard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey wherePrimaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereRecaptchaEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereRounding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSurvey {}
}

namespace AdvisingApp\Survey\Models{
/**
 * AdvisingApp\Survey\Models\SurveyAuthentication
 *
 * @property string $id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property string|null $code
 * @property string $survey_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $author
 * @property-read \AdvisingApp\Survey\Models\Survey $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyAuthentication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSurveyAuthentication {}
}

namespace AdvisingApp\Survey\Models{
/**
 * AdvisingApp\Survey\Models\SurveyField
 *
 * @property string $id
 * @property string $label
 * @property string $type
 * @property bool $is_required
 * @property array $config
 * @property string $survey_id
 * @property string|null $step_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Survey\Models\SurveyStep|null $step
 * @property-read \AdvisingApp\Survey\Models\Survey $submissible
 * @method static \AdvisingApp\Survey\Database\Factories\SurveyFieldFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereStepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSurveyField {}
}

namespace AdvisingApp\Survey\Models{
/**
 * AdvisingApp\Survey\Models\SurveyStep
 *
 * @property string $id
 * @property string $label
 * @property array|null $content
 * @property string $survey_id
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Survey\Models\SurveyField> $fields
 * @property-read int|null $fields_count
 * @property-read \AdvisingApp\Survey\Models\Survey $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyStep whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSurveyStep {}
}

namespace AdvisingApp\Survey\Models{
/**
 * AdvisingApp\Survey\Models\SurveySubmission
 *
 * @property Student|Prospect|null $author
 * @property string $id
 * @property string $survey_id
 * @property string|null $author_id
 * @property string|null $author_type
 * @property \Carbon\CarbonImmutable|null $submitted_at
 * @property \Carbon\CarbonImmutable|null $canceled_at
 * @property \AdvisingApp\Form\Enums\FormSubmissionRequestDeliveryMethod|null $request_method
 * @property string|null $request_note
 * @property string|null $requester_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Survey\Models\SurveyField> $fields
 * @property-read int|null $fields_count
 * @property-read \App\Models\User|null $requester
 * @property-read \AdvisingApp\Survey\Models\Survey $submissible
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission canceled()
 * @method static \AdvisingApp\Survey\Database\Factories\SurveySubmissionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Submission licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission notCanceled()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission notSubmitted()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission requested()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission submitted()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereCanceledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereRequestMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereRequestNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereRequesterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveySubmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperSurveySubmission {}
}

namespace AdvisingApp\Task\Models{
/**
 * AdvisingApp\Task\Models\Task
 *
 * @property-read Student|Prospect $concern
 * @property string $id
 * @property string $title
 * @property string $description
 * @property \AdvisingApp\Task\Enums\TaskStatus $status
 * @property \Illuminate\Support\Carbon|null $due
 * @property string|null $assigned_to
 * @property string|null $created_by
 * @property string|null $concern_type
 * @property string|null $concern_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User|null $assignedTo
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \AdvisingApp\Audit\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\User|null $createdBy
 * @method static \Illuminate\Database\Eloquent\Builder|Task byNextDue()
 * @method static \AdvisingApp\Task\Database\Factories\TaskFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Task licensedToEducatable(string $relationship)
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Task open()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereAssignedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereConcernId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereConcernType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Task withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperTask {}
}

namespace AdvisingApp\Team\Models{
/**
 * AdvisingApp\Team\Models\Team
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string|null $division_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \AdvisingApp\Division\Models\Division|null $division
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \AdvisingApp\Team\Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDivisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperTeam {}
}

namespace AdvisingApp\Team\Models{
/**
 * AdvisingApp\Team\Models\TeamUser
 *
 * @property string $id
 * @property string $team_id
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \AdvisingApp\Team\Models\Team $team
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamUser whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperTeamUser {}
}

namespace AdvisingApp\Timeline\Models{
/**
 * AdvisingApp\Timeline\Models\Timeline
 *
 * @property string $id
 * @property string $entity_type
 * @property string $entity_id
 * @property string $timelineable_type
 * @property string $timelineable_id
 * @property string $record_sortable_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $timelineable
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline forEntity(\Illuminate\Database\Eloquent\Model $entity)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline query()
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereEntityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereRecordSortableDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereTimelineableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereTimelineableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timeline whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperTimeline {}
}

namespace AdvisingApp\Webhook\Models{
/**
 * AdvisingApp\Webhook\Models\InboundWebhook
 *
 * @property string $id
 * @property \AdvisingApp\Webhook\Enums\InboundWebhookSource $source
 * @property string $event
 * @property string $url
 * @property string $payload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook query()
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InboundWebhook whereUrl($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
 class IdeHelperInboundWebhook {}
}

