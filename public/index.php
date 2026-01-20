<?php
require '../autoload.php';

use App\Controllers\UserController;

$controller = new UserController();
$users = $controller->index();
?>

<a href="create.php">Add User</a>

<table border="1">
<?php foreach ($users as $user): ?>
<tr>
    <td><?= $user['name']; ?></td>
    <td><?= $user['email']; ?></td>
    <td>
        <a href="edit.php?id=<?= $user['id']; ?>">Edit</a>
        <a href="delete.php?id=<?= $user['id']; ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
