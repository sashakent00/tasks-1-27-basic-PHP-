<?php

$a = '78';
$b = 78;

if ($a === $b) { 
	$check = 1;
} else{
	$check = 0;
}

var_dump((bool)$check);// false - не равны, true - равны.