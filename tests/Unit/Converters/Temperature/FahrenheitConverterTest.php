<?php

declare(strict_types=1);

use Artemind\UnitConverter\Converters\Temperature\FahrenheitConverter;
use Artemind\UnitConverter\Formulas\Temperature\FahrenheitToCelsiusFormula;
use Artemind\UnitConverter\Formulas\Temperature\FahrenheitToKelvinFormula;
use Artemind\UnitConverter\Formulas\Temperature\FahrenheitToRankineFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new FahrenheitConverter($this->value);
});

it('can convert to celsius', function () {
    $result = $this->converter->toCelsius();
    $formula = new FahrenheitToCelsiusFormula();
    expect($result)->toBe($formula->apply($this->value));
});

it('can convert to kelvin', function () {
    $result = $this->converter->toKelvin();
    $formula = new FahrenheitToKelvinFormula();
    expect($result)->toBe($formula->apply($this->value));
});

it('can convert to rankine', function () {
    $result = $this->converter->toRankine();
    $formula = new FahrenheitToRankineFormula();
    expect($result)->toBe($formula->apply($this->value));
});
