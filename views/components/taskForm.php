<?php
/*
If $task not exists -> empty form
If $task exists -> filled form

example :
$task["category"] = 'done';
$task["affectedUser"] = 'admin';
$task["title"] = 'ti';
$task["description"] = 'desc';
*/
?>

<fieldset class="form-group">
	<label for="input-category"> <?php echo _t("CATEGORYTASKFORM") ?></label>
	<select id="input-category" class="form-control" name="category" required />
		<?php if(isset($task["category"])) { ?>
			<option value="<?php echo $task["category"]; ?>" selected><?php echo $task["category"]; ?></option>
			<option disabled></option>
		<?php } ?>
		<option value="todo"><?php echo _t("todo") ?></option>
		<option value="inprogress"><?php echo _t("inprogress") ?></option>
		<option value="done"><?php echo _t("done") ?></option>
	</select>
</fieldset>

<fieldset class="form-group">
	<label for="input-title"> <?php echo _t("TITLETASKFORM") ?></label>
	<input id="input-title" class="form-control" type="text" name="title" required <?php if(isset($task["title"])) echo 'value="'.$task["title"].'"'  ?> />
</fieldset>

<fieldset class="form-group">
	<label for="input-affected"> <?php echo _t("AFFECTEDUSERTASKFORM") ?></label>
	<select id="input-affected" class="form-control" name="affectedUser" required />
		<?php if(isset($task["affectedUser"])) { ?>
			<option value="<?php echo $task["affectedUser"]; ?>" selected><?php echo $task["affectedUser"]; ?></option>
			<option disabled></option>
		<?php } ?>
		<?php foreach (getUserList() as $username) { ?>
			<option value="<?php echo $username ?>"><?php echo $username ?></option>
		<?php } ?>
	</select>
</fieldset>

<fieldset class="form-group">
	<label for="input-description" > <?php echo _t("DESCRITIONTASKFORM") ?></label>
	<input id="input-description" class="form-control" type="text" name="description" required <?php if(isset($task["description"])) echo 'value="'.$task["description"].'"'  ?> />
</fieldset>