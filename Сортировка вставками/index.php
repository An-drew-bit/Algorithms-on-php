<?php

declare(strict_types = 1);

function insertSort(array $arr): array
{
    if (count($arr) <= 1) {
        return $arr;
    }

    for ($i = 1; $i < count($arr); $i++) {
        $currItem = $arr[$i];
        $prevIndex = $i - 1;

        while (isset($arr[$prevIndex]) && $arr[$prevIndex] > $currItem) {
            $arr[$prevIndex + 1] = $arr[$prevIndex];
            $arr[$prevIndex] = $currItem;

            $prevIndex--;
        }
    }

    return $arr;
}