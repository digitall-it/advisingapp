<?php

/*
<COPYRIGHT>

Copyright © 2022-2023, Canyon GBS LLC

All rights reserved.

This file is part of a project developed using Laravel, which is an open-source framework for PHP.
Canyon GBS LLC acknowledges and respects the copyright of Laravel and other open-source
projects used in the development of this solution.

This project is licensed under the Affero General Public License (AGPL) 3.0.
For more details, see https://github.com/canyongbs/assistbycanyongbs/blob/main/LICENSE.

Notice:
- The copyright notice in this file and across all files and applications in this
 repository cannot be removed or altered without violating the terms of the AGPL 3.0 License.
- The software solution, including services, infrastructure, and code, is offered as a
 Software as a Service (SaaS) by Canyon GBS LLC.
- Use of this software implies agreement to the license terms and conditions as stated
 in the AGPL 3.0 License.

For more information or inquiries please visit our website at
https://www.canyongbs.com or contact us via email at legal@canyongbs.com.

</COPYRIGHT>
*/

namespace Assist\Form\Models;

use App\Models\BaseModel;
use Illuminate\Database\Query\Builder;
use App\Models\Attributes\NoPermissions;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $label
 * @property ?array $content
 * @property-read Submissible $submissible
 * @property-read Collection<int, SubmissibleField> $fields
 */
#[NoPermissions]
abstract class SubmissibleStep extends BaseModel
{
    abstract public function submissible(): BelongsTo;

    abstract public function fields(): HasMany;

    protected function label(): Attribute
    {
        return Attribute::make(get: fn ($value) => $this->hasCast('label') ? $this->castAttribute('label', $value) : $value);
    }

    protected function content(): Attribute
    {
        return Attribute::make(get: fn ($value) => $this->hasCast('content') ? $this->castAttribute('content', $value) : $value);
    }

    protected static function boot(): void
    {
        parent::boot();

        static::saving(
            fn (SubmissibleStep $step) => $step->sort ??= $step->submissible->steps->count(),
        );

        static::withGlobalScope(
            'sort',
            fn (Builder $query) => $query->orderBy('sort'),
        );
    }
}
