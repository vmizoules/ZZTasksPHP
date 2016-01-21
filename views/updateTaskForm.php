<div class="row">

	<div class="col-md-3">
	</div>

	<div class="col-md-6">
		<h3> <?php echo _t("EDITTASK") ?> </h3>

		<?php if($formError) { ?>
			<strong>Bad submit!</strong>
		<?php } ?>		

		<form class="task-form" action="<?php echo generateUrl('updateTask')."&id=".$id ?>" method="post">
			<!-- Form -->
			<?php include("views/components/taskForm.php"); ?>
			<input type="submit" class="btn btn-success" name="submit" value="<?php echo _t("VALIDATE") ?>" />
		</form>
	</div>

	<div class="col-md-3">
	</div>

</div>