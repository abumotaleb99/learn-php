<?php
// echo "<pre>";
// print_r($_FILES);
// echo $_FILES['img']['name']."<br>";
// echo $_FILES['img']['type']."<br>";
// echo $_FILES['img']['tmp_name']."<br>";
// echo pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION)."<br>";

require_once 'UploadFile.php';

$uploadFile = new UploadFile();

$message = "";
if(isset($_POST['btn'])) {
    $message = $uploadFile->uploadImages($_FILES);

}

$queryResult = $uploadFile->getAllImages();


?>

<h3 style="color: green;"><?php echo $message; ?></h3>
<br>

<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select File</th>
            <td>
                <input type="file" name="img" required>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="Submit">
            </td>
        </tr>
    </table>
</form>

<hr>

<table>
    <tr>
    <?php while ($image = mysqli_fetch_assoc($queryResult)) { ?>
        <td><img src="<?php echo $image['img']; ?>" alt="" height="130" width="100"/></td>
    <?php } ?>
    </tr>
</table>