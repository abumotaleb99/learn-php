<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$queryResult = Student::getAllStudentInfo();

$message = "";
if(isset($_GET['delete'])) {
    $id = $_GET['id'];
    $message = Student::deleteStudentInfo($id);

    // Refresh page
    $page = $_SERVER['PHP_SELF'];
    $sec = 1;
    header("Refresh: $sec; url=$page");
}

?>

<a href="index.php">Add Student</a> | <a href="view-student.php">View Student</a>
<h3 style="color: green;"><?php echo $message; ?></h3>
<hr>

<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Country</th>
        <th>Action</th>
    </tr>

    <?php $id = 1; ?>
    <?php while($sudentInfo = mysqli_fetch_assoc($queryResult)) { ?>

    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $sudentInfo['name']; ?></td>
        <td><?php echo $sudentInfo['age']; ?></td>
        <td><?php echo $sudentInfo['email']; ?></td>
        <td><?php echo $sudentInfo['country']; ?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $sudentInfo['id']; ?>">Edit</a> |
            <a href="?delete=true&id=<?php echo $sudentInfo['id']; ?>" onclick="return confirm('Delete this information?');">Delete</a>
        </td>
    </tr>

    <?php $id++; } ?>

</table>