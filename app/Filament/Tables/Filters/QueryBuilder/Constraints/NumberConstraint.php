<?php

namespace App\Filament\Tables\Filters\QueryBuilder\Constraints;

use Closure;
use App\Filament\Tables\Filters\QueryBuilder\Constraints\Operators\IsFilledOperator;
use App\Filament\Tables\Filters\QueryBuilder\Constraints\NumberConstraint\Operators\IsMaxOperator;
use App\Filament\Tables\Filters\QueryBuilder\Constraints\NumberConstraint\Operators\IsMinOperator;
use App\Filament\Tables\Filters\QueryBuilder\Constraints\NumberConstraint\Operators\EqualsOperator;

class NumberConstraint extends Constraint
{
    /**
     * @var array<string, string>
     */
    protected array $existingAggregateAliases = [];

    protected bool | Closure $isInteger = false;

    protected function setUp(): void
    {
        parent::setUp();

        $this->icon('heroicon-m-variable');

        $this->operators([
            IsMinOperator::class,
            IsMaxOperator::class,
            EqualsOperator::class,
            IsFilledOperator::class,
        ]);
    }

    public function integer(bool | Closure $condition = true): static
    {
        $this->isInteger = $condition;

        return $this;
    }

    public function isInteger(): bool
    {
        return (bool) $this->evaluate($this->isInteger);
    }

    public function reportAggregateAlias(string $alias): static
    {
        $this->existingAggregateAliases[$alias] = $alias;

        return $this;
    }

    public function isExistingAggregateAlias(string $alias): bool
    {
        return array_key_exists($alias, $this->existingAggregateAliases);
    }
}
