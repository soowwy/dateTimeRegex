<?php

$string = 'apple, banana, mushroom, pineapple, car';

preg_match_all('/\bapple\b/', $string, $result);

var_dump($result);