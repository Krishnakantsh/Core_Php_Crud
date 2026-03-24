<?php
require_once '../controllers/StudentController.php';
$controller = new StudentController();
$students = $controller->index();
?>

<h2>Student List</h2>
<a href="create.php">Add Student</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php while($row = $students->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['course'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>
