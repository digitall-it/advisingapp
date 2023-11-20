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

namespace Assist\Form\Filament\Blocks;

class FormFieldBlockRegistry
{
    /**
     * @return array<class-string<FormFieldBlock>>
     */
    public static function get(): array
    {
        return [
            TextInputFormFieldBlock::class,
            TextAreaFormFieldBlock::class,
            SelectFormFieldBlock::class,
            RadioFormFieldBlock::class,
            DateFormFieldBlock::class,
            TimeFormFieldBlock::class,
            CheckboxFormFieldBlock::class,
            SignatureFormFieldBlock::class,
            EmailFormFieldBlock::class,
            NumberFormFieldBlock::class,
            PhoneFormFieldBlock::class,
            UrlFormFieldBlock::class,
        ];
    }

    /**
     * @return array<FormFieldBlock>
     */
    public static function getInstances(): array
    {
        return collect(static::get())
            ->map(fn (string $block): FormFieldBlock => $block::make())
            ->all();
    }

    /**
     * @return array<string, class-string<FormFieldBlock>>
     */
    public static function keyByType(): array
    {
        return collect(static::get())
            ->mapWithKeys(fn (string $block): array => [$block::type() => $block])
            ->all();
    }
}
