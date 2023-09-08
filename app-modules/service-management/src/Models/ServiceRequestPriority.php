<?php

namespace Assist\ServiceManagement\Models;

use Eloquent;
use DateTimeInterface;
use App\Models\BaseModel;
use Assist\Audit\Models\Audit;
use Illuminate\Support\Carbon;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Assist\Audit\Models\Concerns\Auditable as AuditableTrait;

/**
 * Assist\ServiceManagement\Models\ServiceRequestPriority
 *
 * @property string $id
 * @property string $name
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection<int, Audit> $audits
 * @property-read int|null $audits_count
 * @property-read Collection<int, \Assist\ServiceManagement\Models\ServiceRequest> $serviceRequests
 * @property-read int|null $service_requests_count
 *
 * @method static \Assist\ServiceManagement\Database\Factories\ServiceRequestPriorityFactory factory($count = null, $state = [])
 * @method static Builder|ServiceRequestPriority newModelQuery()
 * @method static Builder|ServiceRequestPriority newQuery()
 * @method static Builder|ServiceRequestPriority onlyTrashed()
 * @method static Builder|ServiceRequestPriority query()
 * @method static Builder|ServiceRequestPriority whereCreatedAt($value)
 * @method static Builder|ServiceRequestPriority whereDeletedAt($value)
 * @method static Builder|ServiceRequestPriority whereId($value)
 * @method static Builder|ServiceRequestPriority whereName($value)
 * @method static Builder|ServiceRequestPriority whereOrder($value)
 * @method static Builder|ServiceRequestPriority whereUpdatedAt($value)
 * @method static Builder|ServiceRequestPriority withTrashed()
 * @method static Builder|ServiceRequestPriority withoutTrashed()
 *
 * @mixin Eloquent
 */
class ServiceRequestPriority extends BaseModel implements Auditable
{
    use SoftDeletes;
    use HasUuids;
    use AuditableTrait;

    protected $fillable = [
        'name',
        'order',
    ];

    public function serviceRequests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class, 'priority_id');
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format(config('project.datetime_format') ?? 'Y-m-d H:i:s');
    }
}