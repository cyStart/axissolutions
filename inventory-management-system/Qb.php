<?php

$a = array('ava', 'emma', 'olivia');
$b = array('olivia', 'sophia', 'emma');

$c = array_merge($a,$b);
$d = array_unique($c);

print_r($d);

?>