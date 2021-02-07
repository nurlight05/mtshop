<?php

namespace App\Helper;

class Helper {
    
    public static function getSlug($value)
    {
        $converter = array(
            'а' => 'a',    'ә' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',
            'ғ' => 'g',    'д' => 'd',    'е' => 'e',    'ё' => 'e',    'ж' => 'zh',
            'з' => 'z',    'и' => 'i',    'й' => 'i',    'к' => 'k',    'қ' => 'k',
            'л' => 'l',    'м' => 'm',    'н' => 'n',    'ң' => 'n',    'о' => 'o',
            'ө' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ұ' => 'u',    'ү' => 'u',    'ф' => 'f',    'х' => 'h',
            'ц' => 'c',    'ч' => 'ch',   'ш' => 'sh',   'щ' => 'sh',   'э' => 'e',
            'ы' => 'y',    'і' => 'i',    'һ' => 'h',    'ъ'  => '',    'ь' => '',
            'ю' => 'yu',   'я' => 'ya' 
        );
            
        $value = mb_strtolower($value);
        $value = strtr($value, $converter);
        $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
        $value = mb_ereg_replace('[-]+', '-', $value);
        $value = trim($value, '-'); 
        
        return $value;
    }

}