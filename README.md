## Value Objects

[![Build Status][icon-github-workflow]][link-github-workflow]
[![Software License][icon-license]][link-license]
[![Latest Version on Packagist][icon-version]][link-packagist]
[![Total Downloads][icon-downloads]][link-packagist]

A collection of framework agnostic PHP Value Objects.

This package is compliant with the FIG standards [PSR-1][link-psr-1], [PSR-2][link-psr-2] and [PSR-4][link-psr-4] to ensure a high level of interoperability between shared PHP.
If you notice any compliance oversights, please send a patch via pull request.

#### What is a Value Object?

A Value Object is an immutable type that is distinguishable only by the state of its properties, meaning, they will be equal if their properties are equal.

> Plese refer to [Wikipedia](https://en.wikipedia.org/wiki/Value_object) to learn more about Value Objects.

## Instalation

You can install the package via [Composer](https://getcomposer.org/) by running:

```shell
composer require neuecommerce/value-objects
```

## Available Value Objects

Here's a list of the available Value Objects and a link to their specific documentation page :)

- [`BirthDate`](https://docs.neuecommerce.com/guide/value-objects/birth-date.html)
- [`PhoneNumber`](https://docs.neuecommerce.com/guide/value-objects/phone-number.html)

## Contributing

Thank you for your interest in Value Objects. Here are some of the many ways to contribute.

- Check out our [contributing guide](/.github/CONTRIBUTING.md)
- Look at our [code of conduct](/.github/CODE_OF_CONDUCT.md)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.


[link-psr-1]:           http://www.php-fig.org/psr/psr-1/
[link-psr-2]:           http://www.php-fig.org/psr/psr-2/
[link-psr-4]:           http://www.php-fig.org/psr/psr-4/
[link-github-workflow]: https://github.com/neuecommerce/value-objects/actions?query=workflow%3ATests
[link-license]:         https://opensource.org/licenses/MIT
[link-packagist]:       https://packagist.org/packages/neuecommerce/value-objects

[icon-github-workflow]: https://github.com/neuecommerce/value-objects/workflows/Tests/badge.svg?branch=1.x
[icon-license]:         https://poser.pugx.org/neuecommerce/value-objects/license
[icon-version]:         https://poser.pugx.org/neuecommerce/value-objects/version
[icon-downloads]:       https://poser.pugx.org/neuecommerce/value-objects/downloads

[carbon-link]: https://carbon.nesbot.com/docs/
