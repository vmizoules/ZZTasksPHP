<?php 
// read global var $app
global $app;
?>
<h3>TODO</h3>

<?php 
foreach ($app['tasks'] as $key => $value) {
	if($value["category"]=="todo") {
		include("views/components/task.php");
	}
};
?>

<h3>In progress</h3>
<?php 
foreach ($app['tasks'] as $key => $value) {
	if($value["category"]=="inprogress") {
		include("views/components/task.php");
	}
};
?>
<h3>Done</h3>
<?php 
foreach ($app['tasks'] as $key => $value) {
	if($value["category"]=="done") {
		include("views/components/task.php");
	}
};
?>

