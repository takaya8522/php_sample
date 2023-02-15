<?php
$data = ['Tennis', 'Swimming', 'Soccer', 'Baseball'];
sort($data, SORT_STRING);
print_r($data);
rsort($data, SORT_STRING);
print_r($data);
$data2 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11, 'Baseball' => 9];
asort($data2, SORT_NUMERIC);
print_r($data2);
