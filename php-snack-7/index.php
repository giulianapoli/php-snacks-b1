<?php

$array = [
    0 => [
        'nome' => 'Giulia',
        'cognome' => 'Napoli',
        'voti' => [6, 6, 6]
    ],
    1 => [
        'nome' => 'Giulia',
        'cognome' => 'Napoli',
        'voti' => [6, 6, 6]
    ],
    2 => [
        'nome' => 'Giulia',
        'cognome' => 'Napoli',
        'voti' => [6, 6, 6]
    ],
    3 => [
        'nome' => 'Giulia',
        'cognome' => 'Napoli',
        'voti' => [6, 6, 6]
    ],
    4 => [
        'nome' => 'Giulia',
        'cognome' => 'Napoli',
        'voti' => [6, 6, 6]
    ],
];

for ($i = 0; $i < count($array); $i++) {

    
    $average = array_sum($array[$i]['voti'])/count($array[$i]['voti']);
    
    echo '<li>'.$array[$i]['nome']."\n".$array[$i]['cognome'].' - '.$average.'</li>';
    
};


?>