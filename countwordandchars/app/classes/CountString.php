<?php
namespace App\classes;

class CountString {
    public static function countWordCharacter($data) {
        $strLength = strlen($data['given_string']);
        $strTotalWords = str_word_count($data['given_string']);
      
        return $result = [
            'str_lenght' => $strLength,
            'str_total_words' => $strTotalWords
        ];

    }


}