<?php
// read global var $app
global $app;

$id = 2;



$app['tasks'][$id]["category"];

var_dump($app['tasks'][2]);

include_once('views/updateTaskForm.php');
