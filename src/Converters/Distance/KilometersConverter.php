<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Distance;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Distance\KilometersToMilesFormula;

class KilometersConverter extends BaseConverter
{
    public function toMiles(): float
    {
        return $this->resolveFormula(KilometersToMilesFormula::class);
    }
}
