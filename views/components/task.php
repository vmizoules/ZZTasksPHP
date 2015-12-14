<div class="row">   
	<br>
	<div class="task-content col-sm-12">
		<h3 class="task-title"><?php echo $value["title"] ?></h3>
		<a href="<?php echo generateUrl('updateTask').'&id='.$key ?>">edit</a>
		<a href="<?php echo generateUrl('deleteTask').'&id='.$key ?>">delete</a>

		<div class="row">
			<div class="col-xs-9">
				<small style="font-family:courier,'new courier';" class="text-muted"><?php echo $value["description"] ?></small>
				<h4><span class="label label-default"> <?php echo _t("AFFECTEDTOTASK") ?><?php echo $value["affectedUser"] ?></span></h4><h4>
				<h4><span class="label label-default"> <?php echo _t("OWNERTASK") ?><?php echo $value["owner"] ?></span></h4>
				</div>
			<div class="col-xs-3"></div>
		</div>
		<br><br>
	</div>
</div>

<hr>