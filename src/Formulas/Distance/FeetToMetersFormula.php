<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Formulas\Distance;

use Artemind\UnitConverter\Formulas\FormulaInterface;

class FeetToMetersFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value * 0.3048;
    }
}
