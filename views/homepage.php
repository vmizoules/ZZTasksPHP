<?php
//given vars: $total $todo $inprogress $done
?>
<div class="row text-center">
	<div class="count-total col-lg-12">
		<p> Nombre Total tache: <?php echo $total ?></p>
	</div>
</div>

<div class="row text-center">
	<div class="count-todo col-lg-4">
		<p>Nombre de tache à faire : <?php echo $todo ?></p>
	</div>

	<div class="count-inprogress col-lg-4">
		<p>Nombre de tache en cours : <?php echo $inprogress; ?></p>
	</div>

	<div class="count-done col-lg-4">
		<p>Nombre de tache terminée : <?php echo $done; ?></p>
	</div>
</div>