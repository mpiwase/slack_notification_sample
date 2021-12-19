<?php

/**
 * 最大公約数を求める
 * @param int $a
 * @param int $b
 * @return int
 */
function gcd(int $a, int $b): int
{
    while (true) {
        $r = $a % $b;
        if ($r === 0) {
            return $b;
        }
        $a = $b;
        $b = $r;
    }
}
