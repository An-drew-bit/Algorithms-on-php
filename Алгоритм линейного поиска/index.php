<?php

declare(strict_types = 1);

function linearSearch(array $arr, $item): int|bool
{
    foreach ($arr as $key => $value) {
        if ($value == $item) {
            return $key;
        }
    }

    return false;
}