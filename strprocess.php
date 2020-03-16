<?php
    $stringToCheck = $_POST["stringInput"];
    $allowedPattern = "/[^a-zA-Z ]+/";
    $vowels = array("A","E","I","O","U","a","e","i","o","u");


    if(preg_match($allowedPattern, $stringToCheck)){
        echo "Please enter valid string";
    }
    else{
        echo preg_replace($vowels, "", $stringToCheck);
    }
?>