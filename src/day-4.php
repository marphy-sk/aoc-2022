<?php

$data = file_get_contents(dirname(__FILE__) . '/data/4.txt');
$data = explode("\n", trim($data));

$contains = 0;

foreach ($data as $index => $line) {
    [$one, $two] = explode(',', $line);

    [$oneA, $oneB] = explode('-', $one);
    [$twoA, $twoB] = explode('-', $two);

    $rangeA = range($oneA, $oneB);
    $rangeB = range($twoA, $twoB);


    foreach ($rangeA as $room) {
        if (in_array($room, $rangeB)) {
            $contains++;
            break;
        }
    }

}

dd($contains);
