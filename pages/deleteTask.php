<?php

if(isset($_GET['id'])) {
	deleteTask($_GET['id'], getUsername());
}