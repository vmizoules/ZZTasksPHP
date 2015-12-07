<?php

function createTask ($owner, $titre, $taskUser, $text, array $associatedUsers){
	// read global var $app
	global $app;
	// check user permission exists
	if (checkUserPermission($owner, "createTask")==true){
		//check user exist
		if(checkUserExists($taskUser)){
			//add tasks in global array
			$app['tasks'][] = array(
				'titre' => $titre,
				'owner' => $owner,
				'taskUser'=> $taskUser,
				'text'=> $text,
			);
			saveTasks();
		}
	}
}