<?php

declare(strict_types = 1);

function selectionSort(array $arr): array
{
    if (count($arr) <= 1) {
        return $arr;
    }

    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;

        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        list($arr[$i], $arr[$min]) = [$arr[$min], $arr[$i]];
    }

    return $arr;
}