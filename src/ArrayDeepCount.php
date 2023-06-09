<?php

namespace App\ArrayDeepCount;

/**
* You are given an array. Complete the function that returns the number of ALL elements within an array, including any nested arrays.
*
* Examples
* []                   -->  0
* [1, 2, 3]            -->  3
* ["x", "y", ["z"]]    -->  4
* [1, 2, [3, 4, [5]]]  -->  7
*
* Link: https://www.codewars.com/kata/596f72bbe7cd7296d1000029/train/php
*/
function deep_c(array $a): int {
  return array_reduce($a, function ($acc, $value) {
    if (!is_array($value)) {
      $acc++;
      return $acc;
    }
    
    return deep_c($value) + 1 + $acc;
  }, 0);
}
