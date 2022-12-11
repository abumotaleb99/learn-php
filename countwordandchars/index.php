<?php
// require_once 'app/classes/CountString.php';

// $countstring = new App\classes\CountString();

// if(isset($_POST['btn'])) {
//     $result = $countstring->countWordCharacter($_POST); 
// }


// require_once 'app/classes/CountString.php';
require_once 'vendor/autoload.php';
use App\classes\CountString;

if(isset($_POST['btn'])) {
    $result = CountString::countWordCharacter($_POST); 
}

?>

<form action="" method="POST">
    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="given_string" value="<?php echo (isset($_POST['given_string'])) ? $_POST['given_string'] : '' ?>"></td>
        </tr>
        <tr>
            <th>Total number of words</th>
            <td><input type="number" value="<?php echo $result['str_lenght']; ?>"></td>
        </tr>
        <tr>
            <th>Total number of character</th>
            <td><input type="number" value="<?php echo $result['str_total_words']; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>