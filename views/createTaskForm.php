<h3><?php echo _t("ADDTASK") ?> </h3>

<?php if($formError) { ?>
	<strong>Bad submit!</strong>
<?php } ?>		
		
<form action="<?php echo generateUrl('createTask')?>" method="post">
	Category : <select name="category"/>
					<option value="todo">Todo</option>
					<option value="inprogress">In progress</option>
					<option value="done">Done</option>
				</select><br/>
	Title: <input type="text" name="title" required /><br/>
	Affected User: <input type="text" name="affectedUser" required /><br/>
	Description: <input type="text" name="description" required /><br/>
	<input type="submit" name="submit" />
</form>