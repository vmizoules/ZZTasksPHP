<?php

// check user permission exists
if (checkUserPermission(getUsername(), "listTask")) {
	// display list
	include_once('views/listTask.php');
} else {
    // user do not have permission -> display to him
    include_once('views/permissionError.php');
}