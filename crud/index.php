<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$message = "";
if(isset($_POST['btn'])) {
    $message = Student::saveStudentInfo($_POST);
}

?>

<a href="index.php">Add Student</a> | <a href="view-student.php">View Student</a>
<h3 style="color: green;"><?php echo $message; ?></h3>
<hr>

<form action="" method="POST">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><input type="text" name="country"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>