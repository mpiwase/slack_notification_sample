<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/sample.php";

class SampleTest extends TestCase
{
    /**
     * @covers ::gcd
     */
    public function testGcd()
    {
        self::assertThat(gcd(10, 2), self::equalTo(2));
        self::assertThat(gcd(19472620, 19105), self::equalTo(5));
        self::assertThat(gcd(19, 11), self::equalTo(1));
        self::assertThat(gcd(17386, 17386), self::equalTo(17386));
        self::assertThat(gcd(1, 17386), self::equalTo(1));
        self::assertThat(gcd(17386, 1), self::equalTo(1));
        self::assertThat(gcd(0, 17386), self::equalTo(17386));
    }

    /**
     * @covers ::lcm
     */
    public function testLcm()
    {
        self::assertThat(lcm(1, 2), self::equalTo(2));
        self::assertThat(lcm(7, 1), self::equalTo(7));
        self::assertThat(lcm(6, 4), self::equalTo(12));
        self::assertThat(lcm(10, 3), self::equalTo(30));
        self::assertThat(lcm(17386, 17386), self::equalTo(17386));
        self::assertThat(lcm(111, 157), self::equalTo(111 * 157));
    }
}
