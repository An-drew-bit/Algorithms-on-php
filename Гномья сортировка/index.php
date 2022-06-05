<?php

declare(strict_types = 1);

function gnomeSort(array $arr): array
{
    $i = 1;
    $j = 2;

    while($i < count($arr)) {
        if ($arr[$i - 1] <= $arr[$i]) {
            $i = $j;
            $j++;

        } else {
            list($arr[$i], $arr[$i - 1]) = [$arr[$i - 1], $arr[$i]];
            $i--;

            if ($i == 0) {
                $i = $j;
                $j++;
            }
        }
    }

    return $arr;
}