<?php
//given vars: $total $todo $inprogress $done
?>

<div class="count-stats">

	<a href="<?php echo generateUrl('listTask')?>">
		<div class="row text-center">
			<div class="count total col-lg-12 container">
				<p><?php echo _t("TOTAL") ?><strong><?php echo $total ?></strong></p>
			</div>
		</div>

		<div class="row text-center">
			<div class="count todo col-lg-4 container">
				<p><?php echo _t("TODOLIST") ?> <strong><?php echo $todo ?></strong></p>
			</div>

			<div class="count inprogress col-lg-4 container">
				<p><?php echo _t("INPROGRESSLIST") ?> <strong><?php echo $inprogress; ?></strong></p>
			</div>

			<div class="count done col-lg-4 container">
				<p><?php echo _t("DONE") ?> <strong><?php echo $done; ?></strong></p>
			</div>
		</div>
	</a>

</div>
