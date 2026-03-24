<?php
require_once '../controllers/StudentController.php';

if ($_POST) {
    $controller = new StudentController();
    $controller->store($_POST);
    header("Location: index.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Course: <input type="text" name="course"><br>
    <button type="submit">Save</button>
</form>
