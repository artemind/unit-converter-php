<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Formulas\Weight;

use Artemind\UnitConverter\Formulas\FormulaInterface;

class PoundsToKilogramsFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value * 0.453592;
    }
}
