<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Weight;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Weight\KilogramsToPoundsFormula;

class KilogramsConverter extends BaseConverter
{
    public function toPounds(): float
    {
        return $this->resolveFormula(KilogramsToPoundsFormula::class);
    }
}
