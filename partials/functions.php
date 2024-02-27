<?php

$passwordLength = $_GET['length'];

if (isset($passwordLength) && $passwordLength != "") {
    function generaPassword($length)
    {
        $simboli = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?~@#-_+<>[]{}";
        $simboliShuffle = str_shuffle($simboli);
        $password = substr($simboliShuffle, 0, $length);
        return $password;
    };
} else {
    $isEmpty = true;
}
