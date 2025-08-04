<?php

declare(strict_types=1);

use Artemind\UnitConverter\Converters\Distance\MilesConverter;
use Artemind\UnitConverter\Formulas\Distance\MilesToKilometersFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new MilesConverter($this->value);
});

it('can convert to kilometers', function () {
    $result = $this->converter->toKilometers();
    $formula = new MilesToKilometersFormula();
    expect($result)->toBe($formula->apply($this->value));
});
