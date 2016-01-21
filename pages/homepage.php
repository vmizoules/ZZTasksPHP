<?php
// read global var $app
global $app;

// count some stats !
$done = 0;
$inprogress = 0;
$todo = 0;

foreach ($app['tasks'] as $key => $value) {
    switch ($value["category"]) {
        case 'todo':
            $todo++;
            break;
        case 'inprogress':
            $inprogress++;
            break;
        case 'done':
            $done++;
            break;
    }
}

$total = $done + $inprogress + $todo;

include_once('views/homepage.php');