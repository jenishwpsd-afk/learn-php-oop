<?php
require '../autoload.php';

use App\Controllers\UserController;

if ($_POST) {
    (new UserController())->store($_POST);
    header('Location: index.php');
}
?>

<form method="POST">
    <input name="name" placeholder="Name" required>
    <input name="email" placeholder="Email" required>
    <button>Add</button>
</form>
