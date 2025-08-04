<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Distance;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Distance\MetersToFeetFormula;

class MetersConverter extends BaseConverter
{
    public function toFeet(): float
    {
        return $this->resolveFormula(MetersToFeetFormula::class);
    }
}
