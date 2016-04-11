# Schnittstabil\ArraySome [![Build Status](https://travis-ci.org/schnittstabil/array_some.svg?branch=master)](https://travis-ci.org/schnittstabil/array_some) [![Coverage Status](https://coveralls.io/repos/schnittstabil/array_some/badge.svg?branch=master&service=github)](https://coveralls.io/github/schnittstabil/array_some?branch=master) [![Code Climate](https://codeclimate.com/github/schnittstabil/array_some/badges/gpa.svg)](https://codeclimate.com/github/schnittstabil/array_some)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/c9be6ad3-f7e2-46f9-9966-f9062422341e/big.png)](https://insight.sensiolabs.com/projects/c9be6ad3-f7e2-46f9-9966-f9062422341e)

> Checks whether some element resp. key in an array passes a test implemented by a callback function


## Install

```
$ composer require schnittstabil/array_some
```


## Usage

```php
use function Schnittstabil\ArraySome\array_some;

array_some(['l', 'e', 'e', 't'], 'is_string'); // => true
array_some([ 1,   3,   3,   7 ], 'is_string'); // => false


use function Schnittstabil\ArraySome\array_some_key;

array_some_key(['unicorns' => 24], 'is_string'); // => true
array_some_key([42 => 'unicorns'], 'is_string'); // => false
```


## API

```php
/**
 * Checks whether some element in the array passes the test implemented by the callback function.
 *
 * @param array    $array    The array to iterate over
 * @param callable $callback The callback function to use
 *
 * @return bool
 */
function array_some(array $array, callable $callback);

/**
 * Checks whether some key in the array passes the test implemented by the callback function.
 *
 * @param array    $array    The array to iterate over
 * @param callable $callback The callback function to use
 *
 * @return bool
 */
function array_some_key(array $array, callable $callback);
```


## License

MIT © [Michael Mayer](http://schnittstabil.de)
