<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\ArrayDeepCount\deep_c;

class DeepCountTest extends TestCase {
  public function testExamples() {
    $this->assertSame(0, deep_c([]));
    $this->assertSame(3, deep_c([1, 2, 3]));
    $this->assertSame(4, deep_c(["x", "y", ["z"]]));
    $this->assertSame(7, deep_c([1, 2, [3, 4, [5]]]));
    $this->assertSame(8, deep_c([[[[[[[[[]]]]]]]]]));
  }
}