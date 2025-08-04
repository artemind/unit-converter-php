<?php

declare(strict_types=1);

use Artemind\UnitConverter\Formulas\Temperature\FahrenheitToKelvinFormula;

it('can convert fahrenheit to kelvin', function () {
    $formula = new FahrenheitToKelvinFormula();
    expect($formula->apply(10))->toBe(260.92777778);
});
