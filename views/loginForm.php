
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">ZZTasks - <?php echo _t("LOGIN") ?></h1>
			</div>
			<div class="modal-body">
				<form class="form col-md-12 center-block" action="<?php echo generateUrl('login')?>" method="post">
					<div class="form-group">
						<input type="text" name="login" class="form-control input-lg" placeholder="<?php echo _t("USERLOGIN") ?>" value="<?php echo getUsername() ?>">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" placeholder="<?php echo _t("USERPASSWORD") ?>">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-lg btn-block"><?php echo _t("SIGNIN") ?></button>
						<span class="pull-right"><a href="#"><?php echo _t("REGISTER") ?></a></span>
					</div>
				</form>
			</div>
		  <div class="modal-footer">
				<div class="col-md-12">
					<?php if($loginError) { ?>
						<div class="text-left alert alert-danger" role="alert">
							<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							<?php echo _t("BADLOGIN") ?>
						</div>
					<?php } ?>
			  </div>	
		  </div>
		</div>
	</div>
</div>

