<h3><?php echo _t("EDITTASK") ?> </h3>

<?php if($formError) { ?>
	<strong>Bad submit!</strong>
<?php } ?>		
		
<form action="<?php echo generateUrl('updateTask')."&id=".$id ?>" method="post">

	<!-- Form -->
	<?php include("views/components/taskForm.php"); ?>
	<input type="submit" class="btn btn-success" name="submit" />
</form>
