<?php

declare(strict_types=1);

use Artemind\UnitConverter\Converters\Weight\PoundsConverter;
use Artemind\UnitConverter\Formulas\Weight\PoundsToKilogramsFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new PoundsConverter($this->value);
});

it('can convert to fahrenheit', function () {
    $result = $this->converter->toKilograms();
    $formula = new PoundsToKilogramsFormula();
    expect($result)->toBe($formula->apply($this->value));
});
