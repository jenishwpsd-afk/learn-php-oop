<?php
require '../autoload.php';

use App\Controllers\UserController;

$controller = new UserController();
$user = $controller->edit($_GET['id']);

if ($_POST) {
    $controller->update($_GET['id'], $_POST);
    header('Location: index.php');
}
?>

<form method="POST">
    <input name="name" value="<?= $user['name']; ?>">
    <input name="email" value="<?= $user['email']; ?>">
    <button>Update</button>
</form>
