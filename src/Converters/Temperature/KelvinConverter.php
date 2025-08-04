<?php

declare(strict_types=1);

namespace Artemind\UnitConverter\Converters\Temperature;

use Artemind\UnitConverter\Converters\BaseConverter;
use Artemind\UnitConverter\Formulas\Temperature\KelvinToCelsiusFormula;
use Artemind\UnitConverter\Formulas\Temperature\KelvinToFahrenheitFormula;
use Artemind\UnitConverter\Formulas\Temperature\KelvinToRankineFormula;

class KelvinConverter extends BaseConverter
{
    public function toCelsius(): float
    {
        return $this->resolveFormula(KelvinToCelsiusFormula::class);
    }

    public function toFahrenheit(): float
    {
        return $this->resolveFormula(KelvinToFahrenheitFormula::class);
    }

    public function toRankine(): float
    {
        return $this->resolveFormula(KelvinToRankineFormula::class);
    }
}
