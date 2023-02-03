<?php

$chars = range('a', 'z');
$caps = range ('A', 'Z');
$number = range(0, 9);
$spacechars = ["?", ":", ";", ".", "+", "-", ")"];
$password = "";
$none = "";
$removechars = ["0", "O", "o", "I", "i", "l", "1"];
$length = $_GET['password'];


if (isset($_GET['caps'])) {
    $chars = array_merge($chars, $caps);
}

if (isset($_GET['number'])) {
    $chars = array_merge($chars, $number);
}

if (isset($_GET['spacechars'])) {
    $chars = array_merge($chars, $spacechars);
}

for ($a = 0; $a < $length; $a++) {
    $password .= $chars[mt_rand(0, count($chars) -1)];
}

if (isset($_GET['disabled'], $_GET['password'])) {
    if ($_GET['disabled'] === 'enable') {
        $chars = $chars;
    }
    for ($a = 0; $a < $length; $a++) {
        $password .= $chars[mt_rand(0, count($chars) -1)];
    }
    
    if ($_GET['disabled'] === 'disable') {
        $chars = array_merge($chars, $caps, $number, $spacechars);
        $chars = implode("", $chars);
        $caps = implode("", $caps);
        $number = implode("", $number);
        $spacechars = implode("", $spacechars);
        $removechars = implode(",", $removechars);
        echo $removechars;

        $chars = str_replace($removechars, $none, $chars);
        for ($a = 0; $a < $length; $a++) {
            $password .= $chars[mt_rand(0, strlen($chars) -1)];
        }
    }   


}
echo "Votre mot de passe est : " . $password;

?>