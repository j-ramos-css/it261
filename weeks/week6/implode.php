<?php

$wines = array(
    'cab',
    'merlot',
    'malbec',
    'syrah',
    'blend'
);

// echo $wines;

$my_wines = implode(', ', $wines);
echo $my_wines;