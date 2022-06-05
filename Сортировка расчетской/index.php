<?php

declare(strict_types = 1);

function combSort(array $arr): array
{
    $gap = count($arr);
    $swap = true;

    while ($gap > 1 || $swap) {
        if ($gap > 1) $gap /= 1.25;

        $swap = false;
        $i = 0;

        while ($i + (int) $gap < count($arr)) {
            if ($arr[$i] > $arr[$i + (int) $gap]) {
                list($arr[$i], $arr[$i + (int) $gap]) = [$arr[$i + (int) $gap], $arr[$i]];

                $swap = true;
            }

            $i++;
        }
    }

    return $arr;
}