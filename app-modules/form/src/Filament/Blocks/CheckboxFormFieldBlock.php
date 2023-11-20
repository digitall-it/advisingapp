<?php

namespace Assist\Form\Filament\Blocks;

use Assist\Form\Models\FormField;
use Filament\Infolists\Components\Entry;
use Filament\Infolists\Components\IconEntry;

class CheckboxFormFieldBlock extends FormFieldBlock
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Checkbox');
    }

    public static function type(): string
    {
        return 'checkbox';
    }

    public function fields(): array
    {
        return [];
    }

    public static function getInfolistEntry(FormField $field): Entry
    {
        return IconEntry::make($field->key)
            ->label($field->label)
            ->boolean();
    }

    public static function getFormKitSchema(FormField $field): array
    {
        return [
            '$formkit' => 'checkbox',
            'label' => $field->label,
            'name' => $field->key,
            ...($field->required ? ['validation' => 'required'] : []),
        ];
    }

    public static function getValidationRules(FormField $field): array
    {
        return ['boolean'];
    }
}
