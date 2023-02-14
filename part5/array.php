<?php
$data = ['高江', '青木', '片渕'];
print array_push($data, '山田', '土井');
print_r($data);
print array_pop($data);
print_r($data);
print array_unshift($data, '掛谷', '横塚', '上垣');
print_r($data);