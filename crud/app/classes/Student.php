<?php
namespace App\classes;

class Student {
    private static function dbConnection() {
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'learn-php';

        $link = mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
    }

    public static function saveStudentInfo($data) {
        $sql = "INSERT INTO crud (name, age, email, country) VALUES ('$data[name]', '$data[age]', '$data[email]', '$data[country]')";
        
        if(mysqli_query(Student::dbConnection(), $sql)) {
            $message = "Student info saved successfully.";
            return $message;

        }else {
            die("Query problem. ".mysqli_error(Student::dbConnection()));
        }
    }

    public static function getAllStudentInfo() {
        $sql = "SELECT * FROM crud";
        if(mysqli_query(Student::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Student::dbConnection(), $sql);
            return $queryResult;
            
        }else {
            die("Query problem. ".mysqli_error(Student::dbConnection()));
        }
    }

    public static function getStudentInfoById($id) {
        $sql = "SELECT * FROM crud WHERE id = $id";
        if(mysqli_query(Student::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Student::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query problem. ".mysqli_error(Student::dbConnection()));
        }
    }

    public static function updateStudentInfo($data) {
        $sql = "UPDATE crud SET name = '$data[name]', age = '$data[age]', email = '$data[email]', country = '$data[country]' WHERE id = '$data[id]' ";
        
        if(mysqli_query(Student::dbConnection(), $sql)) {
            header("Location: http://localhost:8080/learn-php/crud/view-student.php");
            
        }else {
            die("Query problem. ".mysqli_error(Student::dbConnection()));
        }
    }

    public static function deleteStudentInfo($id) {
        $sql = "DELETE FROM crud WHERE id = $id";

        if(mysqli_query(Student::dbConnection(), $sql)) {
            $message = "Student info deleted successfully.";
            return $message;

        }else {
            die("Query problem. ".mysqli_error(Student::dbConnection()));
        }
    }


}