<h3><?php echo _t("ADDTASK") ?> </h3>

<?php if($formError) { ?>
	<strong>Bad submit!</strong>
<?php } ?>		
		
<form action="<?php echo generateUrl('createTask')?>" method="post">
	Title: <input type="text" name="title"/><br/>
	UsermakeTask: <input type="text" name="taskUser"/><br/>
	Task: <input type="text" name="taskText"/><br/>
	<input type="submit" name="submit" />
</form>