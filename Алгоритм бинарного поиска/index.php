<?php

declare(strict_types = 1);

function binarySearch(array $arr, $item, $start = 0, $final = null): int|string
{
    if ($final === null) {
        $final = count($arr) - 1;
    }

    if ($start > $final) {
        return "Item not found";
    }

    $half = (int) (($start + $final) / 2);

    if ($arr[$half] !== $item) {
        if ($arr[$half] < $item) {
            $start = $half + 1;

        } else {
            $final = $half - 1;
        }

        return binarySearch($arr, $item, $start, $final);
    }

    return $half;
}