<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Formulas\Temperature;

use Artemind\UnitConverter\Formulas\FormulaInterface;

class CelsiusToRankineFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return round(($value + 273.15) * 9 / 5, 8);
    }
}
