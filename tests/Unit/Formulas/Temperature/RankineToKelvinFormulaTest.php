<?php

declare(strict_types=1);

use Artemind\UnitConverter\Formulas\Temperature\RankineToKelvinFormula;

it('can convert rankine to kelvin', function () {
    $formula = new RankineToKelvinFormula();
    expect($formula->apply(10))->toBe(5.55555556);
});
