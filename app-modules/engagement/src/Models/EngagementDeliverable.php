<?php

namespace Assist\Engagement\Models;

use App\Models\BaseModel;
use OwenIt\Auditing\Contracts\Auditable;
use Assist\Engagement\Enums\EngagementDeliveryMethod;
use Assist\Engagement\Enums\EngagementDeliveryStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Assist\Engagement\Actions\EngagementSmsChannelDelivery;
use Assist\Audit\Models\Concerns\Auditable as AuditableTrait;
use Assist\Engagement\Actions\EngagementEmailChannelDelivery;
use Assist\Engagement\Exceptions\UnknownDeliveryMethodException;

/**
 * Assist\Engagement\Models\EngagementDeliverable
 *
 * @property string $id
 * @property string $engagement_id
 * @property EngagementDeliveryMethod $channel
 * @property EngagementDeliveryStatus $delivery_status
 * @property \Illuminate\Support\Carbon|null $delivered_at
 * @property string|null $delivery_response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Assist\Engagement\Models\Engagement $engagement
 *
 * @method static \Assist\Engagement\Database\Factories\EngagementDeliverableFactory factory($count = null, $state = [])
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
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EngagementDeliverable whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class EngagementDeliverable extends BaseModel implements Auditable
{
    use AuditableTrait;

    protected $fillable = [
        'channel',
        'delivery_status',
        'delivered_at',
        'delivery_response',
    ];

    protected $casts = [
        'channel' => EngagementDeliveryMethod::class,
        'delivery_status' => EngagementDeliveryStatus::class,
        'delivered_at' => 'datetime',
    ];

    public function engagement(): BelongsTo
    {
        return $this->belongsTo(Engagement::class);
    }

    public function hasBeenDelivered(): bool
    {
        return ! is_null($this->delivered_at);
    }

    public function markDeliverySuccessful(): void
    {
        $this->update([
            'delivery_status' => EngagementDeliveryStatus::SUCCESSFUL,
            'delivered_at' => now(),
        ]);
    }

    public function markDeliveryFailed(string $reason): void
    {
        $this->update([
            'delivery_status' => EngagementDeliveryStatus::FAILED,
            'delivery_response' => $reason,
        ]);
    }

    public function deliver(): void
    {
        match ($this->channel) {
            EngagementDeliveryMethod::EMAIL => EngagementEmailChannelDelivery::dispatch($this),
            EngagementDeliveryMethod::SMS => EngagementSmsChannelDelivery::dispatch($this),
            default => throw new UnknownDeliveryMethodException("Delivery channel '{$this->channel}' is not supported."),
        };
    }
}