<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Temperature;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Temperature\FahrenheitToCelsiusFormula;
use Artemind\UnitConverter\Formulas\Temperature\FahrenheitToKelvinFormula;
use Artemind\UnitConverter\Formulas\Temperature\FahrenheitToRankineFormula;

class FahrenheitConverter extends BaseConverter
{
    public function toCelsius(): float
    {
        return $this->resolveFormula(FahrenheitToCelsiusFormula::class);
    }

    public function toKelvin(): float
    {
        return $this->resolveFormula(FahrenheitToKelvinFormula::class);
    }

    public function toRankine(): float
    {
        return $this->resolveFormula(FahrenheitToRankineFormula::class);
    }
}
