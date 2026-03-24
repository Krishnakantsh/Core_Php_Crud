<?php
require_once '../controllers/StudentController.php';

if (isset($_GET['id'])) {
    $controller = new StudentController();
    $controller->delete($_GET['id']);
    header("Location: index.php");
}
