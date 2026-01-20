<?php
require '../autoload.php';

use App\Controllers\UserController;

(new UserController())->destroy($_GET['id']);
header('Location: index.php');
