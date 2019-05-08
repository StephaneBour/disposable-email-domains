<?php

$domains = count(include __DIR__ . '/../config/domains.php');

$readme = preg_replace('#The list contains \*\*([0-9\s]+)\*\* domain names#', 'The list contains **' . number_format($domains, 0, '.', ' ') . '** domain names', file_get_contents(__DIR__ . '/../README.md'));

file_put_contents(__DIR__ . '/../README.md', $readme);
