<?php

$sentence = 'This is a sentence. This is a second sentence. This is a third second. This is a fourth second.';

preg_match_all('/^\s+This is a third sentence+[.!?]$/', $sentence, $result);

var_dump($result);