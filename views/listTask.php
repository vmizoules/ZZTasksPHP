<?php 
// read global var $app
global $app;

foreach ($app['tasks'] as $key => $value) {
?>
	<div class="row">    
		<br>
		<div class="col-md-2 col-sm-3 text-center">
			<a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/women/56.jpg" style="width:100px;height:100px" class="img-circle"></a>
		</div>
		<div class="col-md-10 col-sm-9">
			<h3><?php echo $value["titre"] ?></h3>
			<div class="row">
				<div class="col-xs-9">
					<h4><span class="label label-default"><?php echo $value["owner"] ?></span></h4><h4>
					<small style="font-family:courier,'new courier';" class="text-muted"><?php echo $value["text"] ?></small>
					</h4></div>
				<div class="col-xs-3"></div>
			</div>
			<br><br>
		</div>
	</div>
	<hr>
<?php }; ?>

