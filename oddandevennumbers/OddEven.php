<?php
class OddEven {
    public function oddandevennumbers($data) {
        $firstNumber = $data['first_number'];
        $lastNumber = $data['last_number'];
        $checkBtn = $data['check'];

        $result = "";
        if($firstNumber < $lastNumber) {
            for($i = $firstNumber; $i <= $lastNumber; $i++) {
                if($i%2 != 0 && $checkBtn == "Odd") {
                    $result .= $i." ";

                }elseif ($i%2 == 0 && $checkBtn == "Even") {
                    $result .= $i." ";
                }
            }
            
        }else {
            for($i = $firstNumber; $i >= $lastNumber; $i--) {
                if($i%2 != 0 && $checkBtn == "Odd") {
                    $result .= $i." ";

                }elseif ($i%2 == 0 && $checkBtn == "Even") {
                    $result .= $i." ";
                }
            }

        }

        return $result;

    }


}