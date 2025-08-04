<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Weight;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Weight\PoundsToKilogramsFormula;

class PoundsConverter extends BaseConverter
{
    public function toKilograms(): float
    {
        return $this->resolveFormula(PoundsToKilogramsFormula::class);
    }
}
