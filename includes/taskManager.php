<?php

function createTask ($category, $title, $owner,  $affectedUser,  $description){
	// read global var $app
	global $app;
	// check user permission exists
	if (checkUserPermission($owner, "createTask")==true){
		//check user exist
		if(checkUserExists($affectedUser)){
			//check category exist
			if($category=="todo" || $category=="inprogress" || $category=="done"){
				//add tasks in global array
				$app['tasks'][] = array(
					'category'=> $category,
					'title' => $title,
					'owner' => $owner,
					'affectedUser'=> $affectedUser,
					'description'=> $description,
				);
				saveTasks();
			} else {
				throw new Exception("Bad category", 3);
			}

		} else {
			throw new Exception("Affected User doesn't exist", 2);
		}
	} else {
		throw new Exception("Permission denied", 1);
	}
}
