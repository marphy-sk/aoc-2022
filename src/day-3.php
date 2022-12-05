<?php

$data = file_get_contents(dirname(__FILE__) . '/data/3.txt');
$data = explode("\n", trim($data));

$points = 0;

$alphabeticalToPoints = array_flip(str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));

$mainIndex = 0;
foreach($data as $dataIndex => $line) {
    if ($dataIndex === $mainIndex+1 || $dataIndex === $mainIndex+2) {
        continue;
    }
    $mainIndex = $dataIndex;

    $letters = str_split($line);

    //$middle = count($letters) / 2;
    $result = [];
    foreach($letters as $index => $letter) {
//        if ($index === $middle) {
//            break;
//        }

        if (str_contains($data[$mainIndex+1], $letter) && str_contains($data[$mainIndex+2], $letter)) {
            $result[] = $letter;
        }
    }

    $result = array_unique($result);

    foreach($result as $res) {
        $points += $alphabeticalToPoints[$res] +1;
    }

//    dd($mainIndex);
}

dd($points);
