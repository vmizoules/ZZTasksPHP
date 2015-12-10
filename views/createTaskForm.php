<h3><?php echo _t("ADDTASK") ?> </h3>

<?php if($formError) { ?>
	<strong>Bad submit!</strong>
<?php } ?>		
		
<form action="<?php echo generateUrl('createTask')?>" method="post">

	<!-- Form -->
	<?php include("views/components/taskForm.php"); ?>

	<input type="submit" class="btn btn-success" name="submit" />
</form>