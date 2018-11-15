# charSorting
Тестовое задание в компанию SimUni. 
Реализация класса для сортировки букв в слове. 

## Структура

```
src/
tests/
vendor/
```


## Установка

Через Composer

``` bash
$ composer require pkirillw/charSorting
```

## Использование

``` php
$charSorting = new pkirillw\charSorting();
// $charSorting->sortChar($string, $delimiter);
echo $charSorting->sortChar('лимон апельсин банан яблоко', ' ');
```

## Тестирование

``` bash
$ composer test
```

## Автор

- [PKirillW][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pkirillw/charSorting.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pkirillw/charSorting/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/pkirillw/charSorting.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/pkirillw/charSorting.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pkirillw/charSorting.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pkirillw/charSorting
[link-travis]: https://travis-ci.org/pkirillw/charSorting
[link-scrutinizer]: https://scrutinizer-ci.com/g/pkirillw/charSorting/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/pkirillw/charSorting
[link-downloads]: https://packagist.org/packages/pkirillw/charSorting
[link-author]: https://github.com/pkirillw
[link-contributors]: ../../contributors
