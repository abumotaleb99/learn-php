<?php
$result = "";
if(isset($_POST['btn'])) {
    require_once 'Calculator.php';

    $calculator = new Calculator();

    $result = $calculator->myCalculator($_POST);

}

?>

<form action="" method="POST">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number" value="<?php echo (isset($_POST['first_number'])) ? $_POST['first_number'] : 0; ?>"></td>
        </tr>
        <tr>
            <th>Second Number</th>
            <td><input type="text" name="second_number" value="<?php echo (isset($_POST['second_number'])) ? $_POST['second_number'] : 0; ?>"></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" name="result" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>