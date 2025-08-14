# PHP Unit Converter Package

Unit Converter is a flexible and extensible PHP package that allows you to convert between different units of measurement. 

## Requirements

- PHP 8.2 or higher

## Installation

```bash
composer require artemind/unit-converter
```

## Usage

```php
use Artemind\UnitConverter\Converters\Temperature\CelsiusConverter;

$converter = new CelsiusConverter(10);
$converter->toFahrenheit(); //50.0
$converter->toKelvin(); //283.15
$converter->toRankine(); //509.67
```

## Available Converters

- Distance 
  - Kilometers to Miles
  - Miles to Kilometers
  - Meters to Feet
  - Feet to Meters
- Temperature:
  - Celsius to Fahrenheit
  - Celsius to Kelvin
  - Celsius to Rankine
  - Fahrenheit to Celsius
  - Fahrenheit to Kelvin
  - Fahrenheit to Rankine
  - Kelvin to Fahrenheit 
  - Kelvin to Celsius 
  - Kelvin to Rankine 
  - Rankine to Celsius
  - Rankine to Fahrenheit
  - Rankine to Kelvin
- Weight:
  - Kilograms to Pounds
  - Pounds to Kilograms

## 👨‍💻 Author

**Artem Yeremenko**

- Website: [artemind.dev](https://artemind.dev/?utm_source=github&utm_medium=repo_unit-converter-php&utm_campaign=personal_brand)
- GitHub: [@artemind](https://github.com/artemind)
