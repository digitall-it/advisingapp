<?php

namespace Assist\Form\Http\Controllers;

use Assist\Form\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class FormWidgetController extends Controller
{
    public function view(Request $request, Form $form): JsonResponse
    {
        return response()->json(
            $form->fields->map(function ($field) {
                return match ($field['type']) {
                    'text_input' => (object) [
                        '$formkit' => 'text',
                        'label' => $field['label'],
                        'name' => $field['key'],
                        'required' => $field['required'],
                    ],
                    'text_area' => (object) [
                        '$formkit' => 'textarea',
                        'label' => $field['label'],
                        'name' => $field['key'],
                        'required' => $field['required'],
                    ],
                    'select' => (object) [
                        '$formkit' => 'select',
                        'label' => $field['label'],
                        'name' => $field['key'],
                        'required' => $field['required'],
                        'options' => $field['config']['options'],
                    ],
                };
            })->toArray()
        );
    }
}
