<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Formulas\Distance;

use Artemind\UnitConverter\Formulas\FormulaInterface;

class MilesToKilometersFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value * 1.60934;
    }
}
