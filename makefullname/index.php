<?php
// echo "<pre>";
// print_r($_POST);

$result = "";
if(isset($_POST['btn'])) {
    require_once 'FullName.php';

    $fullName = new FullName();

    $result = $fullName->makeFullName($_POST['first_name'], $_POST['last_name']);

}

?>

<form action="" method="POST">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>