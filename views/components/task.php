<div class="row">   
	<br>
	<div class="task-content col-sm-12">
		<h3 class="task-title"><?php echo $value["title"] ?></h3>

		<?php if(checkUserPermission(getUsername(), 'editTask')) { // if user have edit permissions ?>
			<a href="<?php echo generateUrl('updateTask').'&id='.$key ?>">
				<i class="glyphicon glyphicon-edit"> </i>
			</a>
		<?php } ?>
		<?php if(checkUserPermission(getUsername(), 'removeTask')) { // if user have remove permissions -> display the modal ?>
			<a href="#" data-toggle="modal" data-target="#confirm-delete-<?php echo $key ?>">
				<i class="glyphicon glyphicon-remove-circle"> </i>
			</a>
		<?php } ?>

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

<!-- Delete modal x --> 
<div class="modal fade" id="confirm-delete-<?php echo $key ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <?php echo _t("SUPPRESSION") ?>
            </div>
            <div class="modal-body">
            	<p>
            		<?php echo _t("DELETESENTENCE") ?>
        		</p>
				<p>
				  "<?php echo $value["title"] ?>" <?php echo _t("OF") ?> <strong><cite><?php echo $value["owner"] ?></cite></strong>
				</p>
				</blockquote>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _t("CANCEL") ?></button>
                <a class="btn btn-danger btn-ok" href="<?php echo generateUrl('deleteTask').'&id='.$key ?>"> <?php echo _t("DELETE") ?> </a>
            </div>
        </div>
    </div>
</div>
