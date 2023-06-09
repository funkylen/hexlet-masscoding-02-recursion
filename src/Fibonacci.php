<?php

namespace App\Fibonacci;

/**
* Fibonacci sequence: 0, 1, 1, 2, 3, 5, 8, etc.
* 
* Number in sequnce equals: f(n - 1)+ f(n - 2)
*
* Link: https://www.hackerrank.com/challenges/ctci-fibonacci-numbers/problem
*/
function fibonacci($number)
{
  if ($number === 0) {
    return 0;
  } elseif ($number === 1){
    return 1;
  }
  
  return fibonacci($number - 1) + fibonacci($number - 2);
};