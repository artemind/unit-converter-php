<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Temperature;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Temperature\CelsiusToFahrenheitFormula;
use Artemind\UnitConverter\Formulas\Temperature\CelsiusToKelvinFormula;
use Artemind\UnitConverter\Formulas\Temperature\CelsiusToRankineFormula;

class CelsiusConverter extends BaseConverter
{
    public function toFahrenheit(): float
    {
        return $this->resolveFormula(CelsiusToFahrenheitFormula::class);
    }

    public function toKelvin(): float
    {
        return $this->resolveFormula(CelsiusToKelvinFormula::class);
    }

    public function toRankine(): float
    {
        return $this->resolveFormula(CelsiusToRankineFormula::class);
    }
}
