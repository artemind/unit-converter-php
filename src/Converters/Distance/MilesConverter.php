<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Distance;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Distance\MilesToKilometersFormula;

class MilesConverter extends BaseConverter
{
    public function toKilometers(): float
    {
        return $this->resolveFormula(MilesToKilometersFormula::class);
    }
}
