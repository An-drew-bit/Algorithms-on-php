<?php

declare(strict_types = 1);

function quickSort(array $arr): array
{
    if (count($arr) < 2) {
        return $arr;
    }

    $pivot = $arr[0];
    $leftArr = $rightArr = [];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $pivot) {
            $leftArr[] = $arr[$i];

        } else {
            $rightArr[] = $arr[$i];
        }
    }

    $leftArr = quickSort($leftArr);
    $rightArr = quickSort($rightArr);

    return array_merge($leftArr, [$pivot], $rightArr);
}