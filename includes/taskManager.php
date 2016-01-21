<?php

function checkFields($category, $title, $owner, $affectedUser, $description)
{
    $ret = false;
    // check fields not empty
    if (strlen($title) > 0) {
        //check user exist
        if (checkUserExists($affectedUser)) {
            //check category exist
            if ($category == "todo" || $category == "inprogress" || $category == "done") {
                $ret = true;
            }
        }
    }

    return $ret;
}

function createTask($category, $title, $owner, $affectedUser, $description)
{
    // read global var $app
    global $app;
    // check user permission exists
    if (checkUserPermission($owner, "createTask") == true) {
        //check fields
        if (checkFields($category, $title, $owner, $affectedUser, $description)) {
            //add tasks in global array
            $app['tasks'][] = array(
                'category' => $category,
                'title' => $title,
                'owner' => $owner,
                'affectedUser' => $affectedUser,
                'description' => $description,
            );
            saveTasks();
        } else {
            throw new Exception("One or many fields are invalid!", 2);
        }
    } else {
        throw new Exception("Permission denied!", 1);
    }
}

function updateTask($category, $title, $editor, $affectedUser, $description, $id)
{
    // read global var $app
    global $app;

    // check user permission exists
    if (checkUserPermission($editor, "editTask") == true) {
        //check fields
        $owner = $app['tasks'][$id]['owner']; // same as before
        if (checkFields($category, $title, $owner, $affectedUser, $description)) {
            //update tasks in global array
            $app['tasks'][$id] = array(
                'category' => $category,
                'title' => $title,
                'owner' => $owner,
                'affectedUser' => $affectedUser,
                'description' => $description,
            );
            saveTasks();
        } else {
            throw new Exception("One or many fields are invalid!", 2);
        }
    } else {
        throw new Exception("Permission denied!", 1);
    }
}

function deleteTask($id, $editor)
{
    // read global var $app
    global $app;
    // check user permission exists
    if (checkUserPermission($editor, "removeTask") == true) {
        if (array_key_exists($id, $app['tasks'])) {
            unset($app['tasks'][$id]);
            saveTasks();
        } else {
            throw new Exception("Can't delete this task", 2);
        }
    } else {
        throw new Exception("Permission denied!", 1);
    }
}
