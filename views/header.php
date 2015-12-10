<!-- header -->
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>ZZTasks - <?= $page ?></title>
	<link rel="icon" type="image/ico" href="img/favicon.ico" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo generateUrl('accueil')?>" class="navbar-brand"><?php echo _t("HOME") ?></a>
		</div>
		<nav class="collapse navbar-collapse" role="navigation">
			<!-- LEFT -->
			<ul class="nav navbar-nav">
				<li>
					<a href="<?php echo generateUrl('createTask')?>"><?php echo _t("ADDTASK") ?></a>
				</li>
			</ul>
			<!-- RIGHT -->
			<ul class="nav navbar-right navbar-nav">
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-user"></i> <?php echo _t("WELCOME") ?> <?php echo getUsername() ?>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LanguesDispo
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php foreach ($app['param']['available_trans'] as $value) {
							?>
							<li><a href="<?php echo generateUrl('setlang')?>&lang=<?php echo $value ?>"><img src="img/flags/<?php echo $value ?>.png"/></a></li>
							<?php
						} ?>
					</ul>
		        </li>
				<li>
					<a href="<?php echo generateUrl('logout')?>">
						<i class="glyphicon glyphicon-log-out"></i> <?php echo _t("LOGOUT") ?>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<!-- /Navbar -->

<div id="masthead">  
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>ZZTasks
					<p class="lead"><?php echo _t("SUBTITLE") ?></p>
				</h1>
			</div>
			<div class="col-md-5 visible-md-block visible-lg-block">
				<div class="well well-lg"> 
					<div class="row">
						<div class="col-sm-12">
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div><!-- /cont -->
	
	<div class="container visible-md-block visible-lg-block">
		<div class="row">
			<div class="col-md-12">
				<div class="top-spacer"> </div>
			</div>
		</div> 
	</div><!-- /cont -->
	
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			
			<div class="panel">
				<div class="panel-body">
					
				<!--Content-->

<!-- end header template -->