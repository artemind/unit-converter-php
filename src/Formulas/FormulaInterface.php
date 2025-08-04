<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Formulas;

interface FormulaInterface
{
    public function apply(float $value): float;
}
