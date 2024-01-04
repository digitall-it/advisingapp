<?php

namespace AdvisingApp\Survey\Filament\Blocks;

use AdvisingApp\Form\Filament\Blocks\FormFieldBlock;
use AdvisingApp\Form\Models\SubmissibleField;

class SliderSurveyFieldBlock extends FormFieldBlock
{
    public string $preview = 'survey::blocks.previews.slider';

    public static function type(): string
    {
        return 'slider';
    }

    public static function getFormKitSchema(SubmissibleField $field): array
    {
        return [
            '$formkit' => 'slider',
            'label' => $field->label,
            'name' => $field->getKey(),
            ...($field->is_required ? ['validation' => 'required'] : []),
        ];
    }
}
