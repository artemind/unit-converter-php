<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Formulas\Temperature;

use Artemind\UnitConverter\Formulas\FormulaInterface;

class KelvinToCelsiusFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value - 273.15;
    }
}
