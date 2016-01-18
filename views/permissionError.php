<div class="row text-center">

	<div class="col-md-2">
	</div>

	<div class="col-md-8">

		<!-- Display beautiful message -->
		<p>
			<img src="img/stop_sign.jpg" alt="Stop sign" />

			<div class="alert alert-danger">
				<strong><?php echo _t('WARNING') ?></strong> <?php echo _t('ERRORPERMISSIONTEXT') ?>
			</div>
		</p>

		<p>
			<a class="btn btn-primary" href="<?php echo generateUrl('accueil')?>"> <?php echo _t("HOME") ?> </a>
		</p>

	</div>

	<div class="col-md-2">
	</div>

</div>