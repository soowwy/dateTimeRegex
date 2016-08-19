<?php

$string = 'apple, mist, fist, hi';

preg_match_all('/is/', $string, $matches);

var_dump($matches);