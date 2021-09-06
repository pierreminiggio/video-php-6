<?php

$i = 0;

debutBoucle:

echo PHP_EOL . $i;

$i++;

if ($i !== 5) goto debutBoucle;
