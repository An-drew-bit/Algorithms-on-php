<?php

declare(strict_types = 1);

function bubbleSort(array $arr): array
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $flag = false;

        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                list($arr[$j], $arr[$j + 1]) = [$arr[$j + 1], $arr[$j]];

                $flag = true;
            }
        }

        if (!$flag) return $arr;

    }

    return $arr;
}