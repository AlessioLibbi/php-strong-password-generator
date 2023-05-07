<?php
$lettere = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
$numeri = "1234567890";
$simboli = "|!£$&/()=?°ç@";
$newString = "";
$newArray = str_split($newString, 1);
$password = "";
$passwordArray = [];
$repeat = $_GET["repeat"];
$limit = $_GET["limit"];
if (isset($_GET["let"]) || isset($_GET["num"]) || isset($_GET["sim"])) {
    if (isset($_GET["let"])) {
        $newString .= $lettere;
    }
    if (isset($_GET["num"])) {
        $newString .= $numeri;
    }
    if (isset($_GET["sim"])) {
        $newString .= $simboli;
    }
    if ($repeat == "si") {
        for ($i = 0; $i < $limit; $i++) {
            $random = rand(0, strlen($newString));
            $password .= $newString[$random];
        }
    } else {
        $number = rand(0, strlen($newString));
        $passwordArray = array($newString[$number]);
        for ($i = 1; $i < $limit; $i++) {
            $random = rand(0, strlen($newString) - 1);
            if (!in_array($newString[$random], $passwordArray)) {
                array_push($passwordArray, $newString[$random]);
            } else {
                $i--;
            }
        }
        $password = implode($passwordArray);
    }
}
