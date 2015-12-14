<?php
global $app, $e;
?>

<div class="text-center">
	<h1><?php echo _t('ERRORTITLE') ?></h1>
	<?php if($app['param']['debug']) { ?>

		<!-- Display exception details and stack trace -->
		<pre class="text-left"><?php echo($e) ?></pre>

	<?php } else { ?>

		<!-- Display beautiful message -->
		<p>
			<strong>
				<?php echo _t('ERRORMESSAGE') ?>
			</strong>
			<br/>
			<a href="<?php echo generateUrl('accueil')?>"> <?php echo _t("HOME") ?> </a>
		</p>

	<?php } ?>

	<img src="img/error.jpg" alt="Error code broken" />
</div>