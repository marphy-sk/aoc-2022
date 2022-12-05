<?php

$data = file_get_contents(dirname(__FILE__) . '/data/5.1.txt');
$data = explode("\n", $data);

$data2 = file_get_contents(dirname(__FILE__) . '/data/5.2.txt');
$data2 = explode("\n", $data2);

$moves = [];
foreach ($data2 as $index => $move) {

    if ($index+1 === count($data2)) {
        break;
    }

    preg_match('/move\s(\d*)\sfrom\s(\d*)\sto\s(\d*)/', $move, $matches);

    $moves[] = [
        'count' => $matches[1],
        'from' => $matches[2],
        'to' => $matches[3]
    ];
}

$lines = [];
$table = [];
$rows = 0;
foreach ($data as $index => $line) {
    if ($index+1 === count($data)) {
        break;
    }

    preg_match_all('/([\[\]A-Z\s]{3})\s?/', $line, $matches);
    $lines[] = $matches[1];
    $rows = $rows < count($matches) ? count($matches) : $rows;
}

foreach ($lines as $line) {
    foreach ($line as $index => $item) {
        $table[$index][] = $item;
    }
}

foreach ($table as $index => $line) {
    $line = array_reverse($line);
    $line = array_filter($line, function($value) {
        return $value !== '   ';
    });
    $table[$index] = $line;
}

foreach ($moves as $move) {
    $from = $move['from']-1;
    $to = $move['to']-1;

    $reversedLine = array_reverse($table[$from]);

    $table[$to] = array_merge($table[$to], array_reverse(array_slice($reversedLine, 0, $move['count'])));

    $table[$from] = array_reverse(array_slice($reversedLine, $move['count']));
}

$result = [];
foreach ($table as $tab) {
    $result[] = str_replace(['[', ']'], '', end($tab));
}

dump(implode($result));
