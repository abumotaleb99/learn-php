<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$id = $_GET['id'];
$queryResult = Student::getStudentInfoById($id);
$studentInfo = mysqli_fetch_assoc($queryResult);

$message = "";
if(isset($_POST['btn'])) {
    $message = Student::updateStudentInfo($_POST);
}

?>

<a href="index.php">Add Student</a> | <a href="view-student.php">View Student</a>
<h3 style="color: green;"><?php echo $message; ?></h3>
<hr>

<form action="" method="POST">
    <table>
        <tr>
            <th></th>
            <td><input type="hidden" name="id" value="<?php echo $studentInfo['id']; ?>"></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" value="<?php echo $studentInfo['name']; ?>"></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><input type="number" name="age" value="<?php echo $studentInfo['age']; ?>"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="<?php echo $studentInfo['email']; ?>"></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><input type="text" name="country" value="<?php echo $studentInfo['country']; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>