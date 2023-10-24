<?php

namespace App\Filament\Tables\Filters\QueryBuilder\Constraints\RelationshipConstraint\Operators;

use Illuminate\Database\Eloquent\Builder;
use App\Filament\Tables\Filters\QueryBuilder\Constraints\Operators\Operator;

class IsEmptyOperator extends Operator
{
    public function getName(): string
    {
        return 'isEmpty';
    }

    public function getLabel(): string
    {
        return $this->isInverse() ? 'Is not empty' : 'Is empty';
    }

    public function getSummary(): string
    {
        return $this->isInverse() ? "{$this->getConstraint()->getAttributeLabel()} is not empty" : "{$this->getConstraint()->getAttributeLabel()} is empty";
    }

    public function applyToBaseQuery(Builder $query): Builder
    {
        return $query->{$this->isInverse() ? 'has' : 'doesntHave'}($this->getConstraint()->getRelationshipName());
    }
}