<?php

declare(strict_types=1);

use Artemind\UnitConverter\Formulas\Distance\FeetToMetersFormula;

it('can convert feet to meters', function () {
    $formula = new FeetToMetersFormula();
    expect($formula->apply(10))->toBe(3.048);
});
