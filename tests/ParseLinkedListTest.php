<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\ParseLinkedList\parse;
use App\ParseLinkedList\Node;

class ParseLinkedListTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals(new Node(1, new Node(2, new Node(3))), parse("1 -> 2 -> 3 -> NULL"));
    $this->assertEquals(new Node(0, new Node(1, new Node(4, new Node(9, new Node(16))))), parse("0 -> 1 -> 4 -> 9 -> 16 -> NULL"));
    $this->assertNull(parse("NULL"));
  }
}