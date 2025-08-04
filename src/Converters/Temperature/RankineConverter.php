<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Temperature;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Temperature\RankineToCelsiusFormula;
use Artemind\UnitConverter\Formulas\Temperature\RankineToFahrenheitFormula;
use Artemind\UnitConverter\Formulas\Temperature\RankineToKelvinFormula;

class RankineConverter extends BaseConverter
{
    public function toCelsius(): float
    {
        return $this->resolveFormula(RankineToCelsiusFormula::class);
    }

    public function toFahrenheit(): float
    {
        return $this->resolveFormula(RankineToFahrenheitFormula::class);
    }

    public function toKelvin(): float
    {
        return $this->resolveFormula(RankineToKelvinFormula::class);
    }
}
