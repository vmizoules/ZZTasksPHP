<?php

if(isset($_GET['lang'])) {
	setLang($_GET['lang']);
}

if(isset($_SERVER['HTTP_REFERER'])) {
	redirectUrl($_SERVER['HTTP_REFERER']);
} else {
	redirect("homepage");
}