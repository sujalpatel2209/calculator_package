# Calculator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sujalpatel/calculator.svg?style=flat-square)](https://packagist.org/packages/sujalpatel/calculator)
[![Build Status](https://travis-ci.org/sujalpatel2209/calculator_package.svg?branch=master)](https://travis-ci.org/sujalpatel2209/calculator_package)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sujalpatel2209/calculator_package/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sujalpatel2209/calculator_package/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/sujalpatel2209/calculator_package/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Total Downloads](https://img.shields.io/packagist/dt/sujalpatel/calculator.svg?style=flat-square)](https://packagist.org/packages/sujalpatel/calculator)


Simple Calculation Function Addition, Subtraction and Multiplication.


## Installation

You can install the package via composer:

```bash
composer require sujalpatel/calculator
```

## Usage

**Add Function**
``` php
use Sujalpatel\Calculator\Calculator;

public function addition()
{
    return Calculator::add(5,5); // Answer: 5 + 5 = 5
}
```

**Sub Function**
``` php
use Sujalpatel\Calculator\Calculator;

public function subtraction()
{
    return Calculator::sub(10,5); // Answer: 10 - 5 = 5
}
```

**Multi Function**
``` php
use Sujalpatel\Calculator\Calculator;

public function multiplication()
{
    return Calculator::multi(2,5); // Answer: 2 * 5 = 10
}
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email sujalpatel022@gmail.com instead of using the issue tracker.

## Credits

- [Sujal Patel](https://github.com/sujalpatel)
- [Laravel Package Boilerplate](https://laravelpackageboilerplate.com)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.