<h3><?php echo _t("ADDTASK") ?> </h3>

<?php if($formError) { ?>
	<strong>Bad submit!</strong>
<?php } ?>		
		
<form action="<?php echo generateUrl('createTask')?>" method="post">

	<fieldset class="form-group">
		<label for="input-category"> Category :</label>
		<select id="input-category" class="form-control" name="category" required />
			<option value="todo" selected>Todo</option>
			<option value="inprogress">In progress</option>
			<option value="done">Done</option>
		</select>
	</fieldset>

	<fieldset class="form-group">
		<label for="input-title"> Title:</label>
		<input id="input-title" class="form-control" type="text" name="title" required />
	</fieldset>
	
	<fieldset class="form-group">
		<label for="input-affected"> Affected User:</label>
		<select id="input-affected" class="form-control" name="affectedUser" required />
			<option disabled selected ></option>
			<?php foreach (getUserList() as $username) { ?>
				<option value="<?php echo $username ?>"><?php echo $username ?></option>
			<?php } ?>
		</select>
	</fieldset>

	<fieldset class="form-group">
		<label for="input-description" > Description:</label>
		<input id="input-description" class="form-control" type="text" name="description" required />
	</fieldset>

	<input type="submit" class="btn btn-success" name="submit" />	
</form>