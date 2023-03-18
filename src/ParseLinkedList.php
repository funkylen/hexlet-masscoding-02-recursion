<?php

namespace App\ParseLinkedList;


/**
* "1 -> 2 -> 3 -> NULL"
* new Node(1, new Node(2, new Node(3, NULL)))
*
* The values of each Node must also be non-negative integers so keep that in mind when you are parsing the list from the string.
*
* Link: https://www.codewars.com/kata/582c5382f000e535100001a7/train/php
*/
function parse(string $string)
{
  return null;  
}

class Node {
  public $data, $next;
  public function __construct($data, $next = NULL) {
    $this->data = $data;
    $this->next = $next;
  }
}