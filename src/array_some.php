<?php

namespace Schnittstabil\ArraySome;

if (!function_exists('Schnittstabil\ArraySome\array_some')) {
    /**
     * Checks whether some element in the array passes the test implemented by the callback function.
     *
     * @param array    $array    The array to iterate over
     * @param callable $callback The callback function to use
     *
     * @return bool
     */
    function array_some(array $array, callable $callback)
    {
        foreach ($array as $element) {
            if ($callback($element)) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('Schnittstabil\ArraySome\array_some_key')) {
    /**
     * Checks whether some key in the array passes the test implemented by the callback function.
     *
     * @param array    $array    The array to iterate over
     * @param callable $callback The callback function to use
     *
     * @return bool
     */
    function array_some_key(array $array, callable $callback)
    {
        foreach ($array as $key => $element) {
            if ($callback($key)) {
                return true;
            }
        }

        return false;
    }
}
