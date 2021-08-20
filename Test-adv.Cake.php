<?php
$result = 'Добрый день компания ADV.Cake!';

function utf8_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

echo  utf8_strrev($result);