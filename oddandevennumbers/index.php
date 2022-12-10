<?php
require_once 'OddEven.php';

$result = "";
if(isset($_POST['btn'])) {
    $oddeven = new OddEven;

    $result = $oddeven->oddandevennumbers($_POST);

}


?>

<form action="" method="POST">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="number" name="first_number" required></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="number" name="last_number" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="check" value="Odd" checked>Odd
                <input type="radio" name="check" value="Even">Even
            </td>
        </tr>
        <tr>
            <td>Result</td>
            <td><textarea cols="30" rows="7"><?php echo $result; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>