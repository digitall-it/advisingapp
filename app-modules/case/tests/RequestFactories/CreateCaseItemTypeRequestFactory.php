<?php

namespace Assist\Case\Tests\RequestFactories;

use Worksome\RequestFactories\RequestFactory;

class CreateCaseItemTypeRequestFactory extends RequestFactory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}