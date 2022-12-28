<?php
class UploadFile {
    public function uploadImages($data) {
        $link = mysqli_connect("localhost", "root", "", "learn-php");

        $fileName = $data['img']['name'];
        $directory = "images/";
        $imgUrl = $directory.$fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png") {
            $message = "Sorry, this file type is not supported. You can only upload jpg, jpeg, png, files.";
            return $message;

        }else {
            if(file_exists($imgUrl)) {
                $message = "This image already exist. Please choose another image!";
                return $message;

            }else {
                if($data['img']['size'] > 5000000) {
                    $message = "File size exceeds the allowable limit of (5MB)";
                    return $message;

                }else {
                    move_uploaded_file($data['img']['tmp_name'], $imgUrl);
    
                    $sql = "INSERT INTO uploadfiles (img) VALUES ('$imgUrl')";
                    
                    if(mysqli_query($link, $sql)) {
                        $message = "Image uploaded successfully.";
                        return $message;

                    }else {
                        die("Query problem. ".mysqli_error($link));
                    }
                }
            }

        }
    }

    public function getAllImages() {
        $link = mysqli_connect("localhost", "root", "", "learn-php");

        $sql = "SELECT * FROM uploadfiles";

        if(mysqli_query($link, $sql)) {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;

        }else {
            die("Query problem. ".mysqli_error($link));
        }

    }


}