<?php
$data = ['Tennis', 'Swimming', 'Soccer', 'Baseball'];
sort($data, SORT_STRING);
print_r($data);
rsort($data, SORT_STRING);
print_r($data);