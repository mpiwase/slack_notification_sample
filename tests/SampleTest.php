<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/sample.php";

class SampleTest extends TestCase
{
    /**
     * @covers ::gcd
     */
    function testGcd()
    {
        self::assertThat(gcd(10, 2), self::equalTo(2));
        self::assertThat(gcd(19472620, 19105), self::equalTo(5));
        self::assertThat(gcd(19, 11), self::equalTo(1));
        self::assertThat(gcd(17386, 17386), self::equalTo(17386));
        self::assertThat(gcd(1, 17386), self::equalTo(1));
        self::assertThat(gcd(17386, 1), self::equalTo(1));
        self::assertThat(gcd(0, 17386), self::equalTo(17386));
    }
}
