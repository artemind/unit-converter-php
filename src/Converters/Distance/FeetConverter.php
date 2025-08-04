<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Distance;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Distance\FeetToMetersFormula;

class FeetConverter extends BaseConverter
{
    public function toMeters(): float
    {
        return $this->resolveFormula(FeetToMetersFormula::class);
    }
}
