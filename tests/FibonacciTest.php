<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\Fibonacci\fibonacci;

class FibonacciTest extends TestCase {
  public function testExamples() {
    $this->assertSame(1, fibonacci(2));
    $this->assertSame(2, fibonacci(3));
    $this->assertSame(55, fibonacci(10));
  }
}