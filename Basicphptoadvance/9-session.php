<?php
session_start();

$_SESSION["name"] = "Nopphadol";
$_SESSION["lastname"] = "Kanklaew";

if (isset($_SESSION["name"])) {
    echo  $_SESSION["name"]. " ". $_SESSION["lastname"];
    
}else{
    echo "Nos sesstion data";   
}
?>