<?php

namespace Assist\CaseModule\Models;

use Carbon\Carbon;
use DateTimeInterface;
use App\Models\BaseModel;
use App\Models\RecordStudentItem;
use App\Support\HasAdvancedFilter;
use App\Models\IdeHelperCaseUpdateItem;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperCaseUpdateItem
 */
class CaseUpdateItem extends BaseModel
{
    use HasAdvancedFilter;
    use SoftDeletes;

    public const INTERNAL_RADIO = [
        'N' => 'No',
        'Y' => 'Yes',
    ];

    public const DIRECTION_RADIO = [
        '1' => 'Outbound',
        '2' => 'Inbound',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_id',
        'case_id',
        'update',
        'internal',
        'direction',
    ];

    public $orderable = [
        'id',
        'student.full',
        'student.sisid',
        'student.otherid',
        'case.casenumber',
        'internal',
        'direction',
    ];

    public $filterable = [
        'id',
        'student.full',
        'student.sisid',
        'student.otherid',
        'case.casenumber',
        'internal',
        'direction',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(RecordStudentItem::class);
    }

    public function case(): BelongsTo
    {
        return $this->belongsTo(CaseItem::class);
    }

    public function getInternalLabelAttribute($value)
    {
        return static::INTERNAL_RADIO[$this->internal] ?? null;
    }

    public function getDirectionLabelAttribute($value)
    {
        return static::DIRECTION_RADIO[$this->direction] ?? null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}