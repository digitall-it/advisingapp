<?php

namespace Assist\ServiceManagement\Models;

use Eloquent;
use DateTimeInterface;
use App\Models\BaseModel;
use Laravel\Scout\Searchable;
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
 * Assist\ServiceManagement\Models\ServiceRequestType
 *
 * @property string $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection<int, Audit> $audits
 * @property-read int|null $audits_count
 * @property-read Collection<int, \Assist\ServiceManagement\Models\ServiceRequest> $serviceRequests
 * @property-read int|null $service_requests_count
 *
 * @method static \Assist\ServiceManagement\Database\Factories\ServiceRequestTypeFactory factory($count = null, $state = [])
 * @method static Builder|ServiceRequestType newModelQuery()
 * @method static Builder|ServiceRequestType newQuery()
 * @method static Builder|ServiceRequestType onlyTrashed()
 * @method static Builder|ServiceRequestType query()
 * @method static Builder|ServiceRequestType whereCreatedAt($value)
 * @method static Builder|ServiceRequestType whereDeletedAt($value)
 * @method static Builder|ServiceRequestType whereId($value)
 * @method static Builder|ServiceRequestType whereName($value)
 * @method static Builder|ServiceRequestType whereUpdatedAt($value)
 * @method static Builder|ServiceRequestType withTrashed()
 * @method static Builder|ServiceRequestType withoutTrashed()
 *
 * @mixin Eloquent
 */
class ServiceRequestType extends BaseModel implements Auditable
{
    use SoftDeletes;
    use HasUuids;
    use AuditableTrait;
    use Searchable;

    protected $fillable = [
        'name',
    ];

    /**
     * @return array{id: mixed}
     */
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->getScoutKey(),
            'name' => $this->name,
        ];
    }

    public function serviceRequests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class, 'type_id');
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format(config('project.datetime_format') ?? 'Y-m-d H:i:s');
    }
}