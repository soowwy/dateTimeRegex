<?php

$string = 'something, anything, thingy, thingity';

preg_match_all('/\w+thing\b/', $string, $result);

var_dump($result);