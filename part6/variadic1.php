<?php
function total(float ...$args): float {
  $result = 0;
  foreach ($args as $arg) {
    $result += $arg;
  }
  return $result;
}

print total(7, 3, 10);
print total(11, -5, 4, 88);