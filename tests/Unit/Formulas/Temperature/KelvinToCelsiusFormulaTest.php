<?php

declare(strict_types=1);

use Artemind\UnitConverter\Formulas\Temperature\KelvinToCelsiusFormula;

it('can convert kelvin to celsius', function () {
    $formula = new KelvinToCelsiusFormula();
    expect($formula->apply(10))->toBe(-263.15);
});
