<?php 
// allow to read global var $app
global $app;
?>

<div class="row">
	<div class="list-todo col-lg-4">
		<h3><?php echo _t("TODOLIST") ?></h3>

		<?php
		foreach ($app['tasks'] as $key => $value) {
			if($value["category"]=="todo") {
				include("views/components/task.php");
			}
		};
		?>
	</div>

	<div class="list-inprogress col-lg-4">
		<h3><?php echo _t("INPROGRESSLIST") ?></h3>

		<?php
		foreach ($app['tasks'] as $key => $value) {
			if($value["category"]=="inprogress") {
				include("views/components/task.php");
			}
		};
		?>
	</div>

	<div class="list-done col-lg-4">
		<h3><?php echo _t("DONE") ?></h3>

		<?php 
		foreach ($app['tasks'] as $key => $value) {
			if($value["category"]=="done") {
				include("views/components/task.php");
			}
		};
		?>
	</div>

</div>