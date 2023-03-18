<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\SumOfDigits\digital_root;

class SumOfDigitsTest extends TestCase
{
  /**
   * @dataProvider basicTestDataProvider
   */
  public function testBasic($input, $expected)
  {
    $this->assertSame($expected, digital_root($input), 'Digital root calculation failed!');
  }

  public function basicTestDataProvider()
  {
    return [
      [16, 7],
      [195, 6],
      [992, 2],
      [999999999999, 9],
      [167346, 9],
      [10, 1],
      [0, 0]
    ];
  }
}