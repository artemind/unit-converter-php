<?php

declare(strict_types=1);

use Artemind\UnitConverter\Converters\Temperature\RankineConverter;
use Artemind\UnitConverter\Formulas\Temperature\RankineToCelsiusFormula;
use Artemind\UnitConverter\Formulas\Temperature\RankineToFahrenheitFormula;
use Artemind\UnitConverter\Formulas\Temperature\RankineToKelvinFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new RankineConverter($this->value);
});

it('can convert to celsius', function () {
    $result = $this->converter->toCelsius();
    $formula = new RankineToCelsiusFormula();
    expect($result)->toBe($formula->apply($this->value));
});

it('can convert to fahrenheit', function () {
    $result = $this->converter->toFahrenheit();
    $formula = new RankineToFahrenheitFormula();
    expect($result)->toBe($formula->apply($this->value));
});

it('can convert to kelvin', function () {
    $result = $this->converter->toKelvin();
    $formula = new RankineToKelvinFormula();
    expect($result)->toBe($formula->apply($this->value));
});
