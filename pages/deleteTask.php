<?php

// if "id" parameter is setted
if (isset($_GET['id'])) {
    deleteTask($_GET['id'], getUsername());
}

redirect('listTask');
